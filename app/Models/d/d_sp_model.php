<?php

namespace App\master\Models;

use CodeIgniter\Model;

class DSpModel extends Model
{

    protected $table            = 'd_sp';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $primaryKey       = 'sp_code';
    protected $allowedFields    = [
        'sp_code',
        'branch_code',
        'book_code',
        'sp_qty',
    ];


}