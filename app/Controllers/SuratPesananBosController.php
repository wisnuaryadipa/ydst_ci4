<?php

namespace App\Controllers;


class SuratPesananBosController extends BaseController
{   


    private $v_base_url = 'SuratPesanan/bos';
    
    public function index()
    {
        $data['test'] = 'test';
        $data = [
            'acc_signed' => $this->acc_signed,
        ];

        return render($this, $this->v_base_url+'/index', $data);
    }

    public function create()
    {


        return render($this, 'SuratPesanan/bos/create', $data);
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
