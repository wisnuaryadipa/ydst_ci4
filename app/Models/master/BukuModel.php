<?php

namespace App\Models\master;

use CodeIgniter\Model;

class BukuModel extends Model
{

    protected $table            = 'm_book';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $primaryKey       = 'book_code';
    protected $allowedFields    = [
        'book_code',
        'book_title',
        'Pages',
        'Paper_size',
        'Paper_code',
        'C_color_code',
        'writer',
        'book_tipe',
        'isbn',
    ];


}