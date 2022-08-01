<?php

namespace App\Models\master;

use CodeIgniter\Model;

class MReturSpModel extends Model
{

    protected $table            = 'm_retur_sp';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $primaryKey       = 'retur_code';
    protected $allowedFields    = [
        'retur_code',
        'branch_code',
        'sp_code',
        'trans_date',
        'cancel_by',
        'reason',
        'edit_date',
        'status',
        'printed',
        'user_id',
    ];


}