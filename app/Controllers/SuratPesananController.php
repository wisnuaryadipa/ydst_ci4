<?php

namespace App\Controllers;

class SuratPesananController extends BaseController
{
    public function index()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Users',
            'title' => 'Daftar User',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, '']
        ];

        return render($this, 'SuratPesanan/index', $this->data);
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
