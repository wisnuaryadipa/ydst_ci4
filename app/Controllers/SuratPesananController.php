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
        return view();
    }

    public function detail($id = false){
        return view();

    }

    public function delete($id = false){
        return view();

    }

    public function edit($id = false){
        return view();
        
    }
}
