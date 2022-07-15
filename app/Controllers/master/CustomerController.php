<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class CustomerController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'customer'];

    public function index()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Customer',
            'title' => 'Daftar Customer',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, '']
        ];

        return render($this, 'master/customer/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Customer',
            'title' => 'Buat Customer Baru',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'master/customer/create', $this->data);
    }

    public function edit($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Customer',
            'title' => 'Edit Customer',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']

        ];
        
        return render($this, 'master/customer/edit', $this->data);
    }

    public function detail($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Customer',
            'title' => 'Detail Customer',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        return render($this, 'master/customer/detail', $this->data);
    }

    
}
