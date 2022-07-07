<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['test'] = 'not connected';
        if($this->db){

            $data['test'] = 'connected';
        } else {

            $data['test'] = 'not connected';
        }
        $data['db'] = $this->db->table('h_customer');
        
        return render($this, 'SuratPesanan/index', $data);
    }
}
