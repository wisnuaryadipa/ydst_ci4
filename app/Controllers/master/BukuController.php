<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class BukuController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'buku'];

    public function index()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Buku',
            'title' => 'Daftar Buku',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, '']
        ];

        return render($this, 'admin/buku/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Buku',
            'title' => 'Buat Buku Baru',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'admin/buku/create', $this->data);
    }

    public function edit($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => ' Buku',
            'title' => 'Edit Buku',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']

        ];
        
        return render($this, 'admin/buku/edit', $this->data);
    }

    public function detail($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => ' Buku',
            'title' => 'Detail Buku',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        return render($this, 'admin/buku/detail', $this->data);
    }

    
}
