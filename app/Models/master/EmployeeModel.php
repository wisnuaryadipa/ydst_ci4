<?php

namespace App\master\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{

    protected $table            = 'm_employee';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $primaryKey       = 'empl_code';
    protected $allowedFields  = [
        'empl_code',
        'empl_name',
        'address',
        'city',
        'sex_id',
        'stat_id',
        'religion_id',
        'zip_code',
        'marital_id',
        'grade_id',
        'dept_id',
        'salary',
        'join_date',
        'resign_date',
        'branch_code',
        'birth_code',
        'photo',
        'phone_no',
        'edu_background',
        'active',
    ];


}