<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class AreaController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'area'];

    public function index()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Area',
            'title' => 'Daftar Area',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, '']
        ];

        return render($this, 'master/area/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Area',
            'title' => 'Buat Area Baru',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'master/area/create', $this->data);
    }

    public function edit($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Area',
            'title' => 'Edit Area',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']

        ];
        
        return render($this, 'master/area/edit', $this->data);
    }

    public function detail($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title' => 'Area',
            'title' => 'Detail Area',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        return render($this, 'master/area/detail', $this->data);
    }

    
}
