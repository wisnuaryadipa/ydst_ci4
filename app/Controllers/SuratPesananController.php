<?php

namespace App\Controllers;

class SuratPesananController extends BaseController
{
    public function index()
    {
        $data['test'] = 'test';
        $data = [
            'acc_signed' => $this->acc_signed,
        ];

        return render($this, 'SuratPesanan/index', $data);
    }

    public function create()
    {


        return render($this, 'SuratPesanan/create', $data);
    }

    public function post(){
        return "data";
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
