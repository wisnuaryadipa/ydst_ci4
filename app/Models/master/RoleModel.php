<?php

namespace App\Models\master;

use CodeIgniter\Model;

class RoleModel extends Model
{

    protected $table            = 'm_roles';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $primaryKey       = 'role_id';
    protected $allowedFields  = [
        'role_id',
        'role_name',
        'active',
    ];

    public function getAll() 
    {
        return $this->findAll();
    }
}