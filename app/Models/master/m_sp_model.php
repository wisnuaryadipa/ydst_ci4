<?php

namespace App\Models\master;

use CodeIgniter\Model;

class MSpModel extends Model
{

    protected $table            = 'm_sp';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $primaryKey       = 'branch_code';
    protected $allowedFields    = [
        'branch_code',
        'sales_code',
        'cust_code',
        'period_code',
        'sp_code',
        'trans_date',
        'status',
        'empl_code',
        'sp_note',
        'printed',
        'edit_date',
        'exp_date',
        'user_id',
        'pay_month',
        'dana',
        'tipe',
        'draft',
        'approved',
    ];


}