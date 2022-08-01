<?php

namespace CodeIgniter\Shield\Models;

use CodeIgniter\Database\Database;
use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\Model;
use CodeIgniter\Shield\Authentication\Authenticators\Session;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Exceptions\RuntimeException;
use Faker\Generator;
use InvalidArgumentException;

class UserModel extends Model
{

    protected $table          = 'users';
    protected $primaryKey     = 'id';
    protected $returnType     = User::class;
    protected $useSoftDeletes = true;
    protected $allowedFields  = [
        'username',
        'status',
        'status_message',
        'active',
        'last_active',
        'deleted_at',
        'permissions',
    ];
    protected $useTimestamps = true;
    protected $afterFind     = ['fetchIdentities'];
    /**
     * Locates a User object by ID.
     *
     * @param int|string $id
     */
    public function findById($id): ?User
    {
        return $this->find($id);
    }

    /**
     * Locate a User object by the given credentials.
     *
     * @param array<string, string> $credentials
     */
    public function findByCredentials(array $credentials): ?User
    {
        // Email is stored in an identity so remove that here
        $email = $credentials['email'] ?? null;
        unset($credentials['email']);

        $prefix = $this->db->DBPrefix;

        // any of the credentials used should be case-insensitive
        foreach ($credentials as $key => $value) {
            $this->where("LOWER({$prefix}users.{$key})", strtolower($value));
        }

        if (! empty($email)) {
            $data = $this->select('users.*, auth_identities.secret as email, auth_identities.secret2 as password_hash')
                ->join('auth_identities', 'auth_identities.user_id = users.id')
                ->where('auth_identities.type', Session::ID_TYPE_EMAIL_PASSWORD)
                ->where("LOWER({$prefix}auth_identities.secret)", strtolower($email))
                ->asArray()
                ->first();

            if ($data === null) {
                return null;
            }

            $email = $data['email'];
            unset($data['email']);
            $password_hash = $data['password_hash'];
            unset($data['password_hash']);

            $user                = new User($data);
            $user->email         = $email;
            $user->password_hash = $password_hash;

            return $user;
        }

        return $this->first();
    }

    /**
     * Activate a User.
     */
    public function activate(User $user): void
    {
        $user->active = true;

        $return = $this->save($user);

        $this->checkQueryReturn($return);
    }

    /**
     * Override the BaseModel's `save()` method to allow
     * updating of user email, password, or password_hash
     * fields if they've been modified.
     *
     * @param array|User $data
     *
     * @TODO can't change the return type to void.
     */
    public function save($data): bool
    {
        try {
            $result = parent::save($data);

            if ($result && $data instanceof User) {
                /** @var User $user */
                $user = $data->id === null
                    ? $this->find($this->db->insertID())
                    : $data;

                if (! $user->saveEmailIdentity()) {
                    throw new RuntimeException('Unable to save email identity.');
                }
            }

            return $result;
        } catch (DataException $e) {
            $messages = [
                lang('Database.emptyDataset', ['insert']),
                lang('Database.emptyDataset', ['update']),
            ];
            if (in_array($e->getMessage(), $messages, true)) {
                // @TODO Why true? Shouldn't this workaround be removed?
                return true;
            }

            throw $e;
        }
    }
}
