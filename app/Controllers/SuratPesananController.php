<?php

namespace App\Controllers;

class SuratPesanan extends BaseController
{
    public function index()
    {
        return view('welcome_message');
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
