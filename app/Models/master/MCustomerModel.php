<?php

namespace App\Models\master;

use CodeIgniter\Model;

class MCustomerModel extends Model
{

    protected $table                = 'm_customer';
    protected $useAutoIncrement     = false;
    protected $returnType           = 'object';
    protected $primaryKey           = 'cust_code';
    protected $allowedFields        = [
        'cust_code',
        'cust_name',
        'address',
        'phone_no',
        'fax_no',
        'contact_person',
        'province',
        'city',
        'camat_kode',
        'ans_code',
        'branch_code',
        'school_grade',
        'npsn',
        'reg_date',
        'npwp',
        'active',
        'reason_deactivated',
        'school_email',
        'cp_email',
    ];


}