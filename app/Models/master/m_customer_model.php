<?php

namespace App\master\Models;

use CodeIgniter\Model;

class MCustomerModel extends Model
{

    protected $table            = 'm_faktur';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $primaryKey       = 'book_code';
    protected $allowedFields  = [
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