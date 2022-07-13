<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class UserController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'users'];

    public function index()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Users',
            'title' => 'Daftar User',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, '']
        ];

        return render($this, 'admin/user/index', $this->data);
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
        
        return render($this, 'admin/user/create', $this->data);
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
        
        return render($this, 'admin/user/edit', $this->data);
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
        
        return render($this, 'admin/user/detail', $this->data);
    }

    
}
