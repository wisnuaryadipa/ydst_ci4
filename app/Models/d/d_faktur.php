<?php

namespace App\master\Models;

use CodeIgniter\Model;

class DFakturModel extends Model
{

    protected $table            = 'd_faktur';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $primaryKey       = 'faktur_code';
    protected $allowedFields    = [
        'faktur_code',
        'branch_code',
        'book_code',
        'exemplar',
        'sale_price',
    ];


}