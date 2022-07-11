<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class RoleController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'role'];

    public function index()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Role / Jabatan',
            'title' => 'Daftar Role / Jabatan',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, '']
        ];

        return render($this, 'admin/role/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Roles',
            'title' => 'Buat Role Baru',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'admin/role/create', $this->data);
    }

    public function edit($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Roles',
            'title' => 'Edit Role',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']

        ];
        
        return render($this, 'admin/role/edit', $this->data);
    }

    public function detail($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Roles',
            'title' => 'Detail Role',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        return render($this, 'admin/role/detail', $this->data);
    }

    
}
