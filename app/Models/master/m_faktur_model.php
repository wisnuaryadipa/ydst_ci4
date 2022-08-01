<?php

namespace App\Models\master;

use CodeIgniter\Model;

class MFakturModel extends Model
{

    protected $table            = 'm_faktur';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $primaryKey       = 'faktur_code';
    protected $allowedFields    = [
        'faktur_code',
        'branch_code',
        'period_code',
        'cust_code',
        'sales_code',
        'trans_date',
        'cashier',
        'exp_days',
        'cash',
        'rabat',
        'user_id',
        'info',
        'edit_date',
        'status',
        'printed',
        'finished',
        'f_value',
        'mod_value',
        'print_count',
        'ko',
        'dana',
    ];


}