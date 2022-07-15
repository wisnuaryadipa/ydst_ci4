<?php

namespace App\Controllers\sp;


use App\Controllers\BaseController;

class SuratPesananController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'sp'];

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
        $this->data = [
            ...$this->data,
            'parent_title' => 'Users',
            'title' => 'Buat User Baru',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'SuratPesanan/create', $this->data);
    }

    public function edit($id = null)
    {
        
        $this->data = [
            ...$this->data,
            'parent_title' => 'Users',
            'title' => 'Edit User',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        return render($this, 'SuratPesanan/edit', $this->data);
    }

    public function detail($id = null)
    {
        
        $this->data = [
            ...$this->data,
            'parent_title' => 'Users',
            'title' => 'Detail User',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'detail']
        ];
        
        return render($this, 'SuratPesanan/detail', $this->data);
    }

    
}
