<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class CabangController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'cabang'];

    public function index()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Cabang',
            'title' => 'Daftar Cabang',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, '']
        ];

        return render($this, 'master/cabang/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Cabang',
            'title' => 'Buat Cabang Baru',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'master/cabang/create', $this->data);
    }

    public function edit($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Cabang',
            'title' => 'Edit Cabang',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']

        ];
        
        return render($this, 'master/cabang/edit', $this->data);
    }

    public function detail($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Cabang',
            'title' => 'Detail Cabang',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        return render($this, 'master/cabang/detail', $this->data);
    }

    
}
