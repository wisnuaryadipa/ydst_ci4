<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;

class RoleController extends BaseController
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
            'parent_title' => 'Roles',
            'title' => 'Daftar Role',
            'acc_signed' => $this->acc_signed,
        ];
        
        return render($this, 'admin/role/index', $data);
    }

    public function create()
    {
        
        $data = [
            'parent_title' => 'Roles',
            'title' => 'Buat Role Baru',
            'acc_signed' => $this->acc_signed,
        ];
        
        return render($this, 'admin/role/create', $data);
    }

    public function edit($id = null)
    {
        
        $data = [
            'parent_title' => 'Roles',
            'title' => 'Edit Role',
            'acc_signed' => $this->acc_signed,
        ];
        
        return render($this, 'admin/role/edit', $data);
    }

    public function detail($id = null)
    {
        
        $data = [
            'parent_title' => 'Roles',
            'title' => 'Detail Role',
            'acc_signed' => $this->acc_signed,
        ];
        
        return render($this, 'admin/role/detail', $data);
    }

    
}
