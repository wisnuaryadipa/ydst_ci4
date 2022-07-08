<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $data['test'] = 'not connected';
        if($this->db){

            $data['test'] = 'connected';
        } else {

            $data['test'] = 'not connected';
        }
        $data['db'] = 's';

        $data = [
            'parent_title' => 'Users',
            'title' => 'Daftar User',
            'acc_signed' => $this->acc_signed,
        ];
        
        return render($this, 'admin/user/index', $data);
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
