<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $this->data['test'] = 'not connected';
        $this->data['breadcrumb'] = ['home', 'master', 'users'];
        if($this->db){

            $this->data['test'] = 'connected';
        } else {

            $this->data['test'] = 'not connected';
        }

        $_data = [
            'parent_title' => 'Users',
            'title' => 'Daftar User',
            'acc_signed' => $this->acc_signed,
        ];
        
        $this->data = array_merge($this->data, $_data);
        return render($this, 'admin/user/index', $this->data);
    }

    public function create()
    {
        
        $data = [
            'parent_title' => 'Users',
            'title' => 'Buat User Baru',
            'acc_signed' => $this->acc_signed,
        ];
        
        return render($this, 'admin/user/create', $data);
    }

    public function edit($id = null)
    {
        
        $data = [
            'parent_title' => 'Users',
            'title' => 'Edit User',
            'acc_signed' => $this->acc_signed,
        ];
        
        return render($this, 'admin/user/edit', $data);
    }

    public function detail($id = null)
    {
        
        $data = [
            'parent_title' => 'Users',
            'title' => 'Detail User',
            'acc_signed' => $this->acc_signed,
        ];
        
        return render($this, 'admin/user/detail', $data);
    }

    
}
