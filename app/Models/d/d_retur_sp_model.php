<?php

namespace App\master\Models;

use CodeIgniter\Model;

class dReturSpModel extends Model
{

    protected $table            = 'd_retur_sp';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $primaryKey       = 'retur_code';
    protected $allowedFields    = [
        'retur_code',
        'branch_code',
        'book_code',
        'retur_qty',
    ];


}