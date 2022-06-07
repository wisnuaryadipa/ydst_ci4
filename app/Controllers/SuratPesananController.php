<?php

namespace App\Controllers;

class SuratPesanan extends BaseController
{
    public function index()
    {

        $data['test'] = 'test';
        return render($this, 'SuratPesanan/index', $data);
    }

    public function create(){

    }

    public function detail($id = false){

    }

    public function delete($id = false){

    }

    public function edit($id = false){
        
    }
}
