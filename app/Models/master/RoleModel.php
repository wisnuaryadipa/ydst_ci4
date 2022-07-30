<?php

namespace App\master\Models;

use CodeIgniter\Model;

class CabangModel extends Model
{

    protected $table            = 'm_role';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $primaryKey       = 'branch_code';
    protected $allowedFields  = [
        'branch_code',
        'branch_name',
        'address',
        'phone_no',
        'contact_person',
        'fax_no',
        'warehouse_head',
        'city',
        'email_address',
        'area_code',
        'active',
        'ans_code',
        'branch_head',
        'region',
        'warehouse_code',
    ];


}