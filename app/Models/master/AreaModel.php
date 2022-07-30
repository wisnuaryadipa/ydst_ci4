<?php

namespace App\master\Models;

use CodeIgniter\Model;

class AreaModel extends Model
{

    protected $table            = 'm_area';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $primaryKey       = 'area_code';
    protected $allowedFields  = [
        'area_code',
        'area_name',
        'area_head',
        'address',
        'city',
        'phone_no',
        'fax_no',
        'email_address',
    ];


}