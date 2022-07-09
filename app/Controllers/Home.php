<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data['breadcrumb'] = ['home'];

        $this->data['test'] = 'not connected';
        if($this->db){

            $this->data['test'] = 'connected';
        } else {

            $this->data['test'] = 'not connected';
        }

        
        $this->data = array_merge($this->data, ['db' => 'tests']);
        $this->data['db'] = 's';
        return render($this, 'SuratPesanan/index', $this->data);
    }

    
}
