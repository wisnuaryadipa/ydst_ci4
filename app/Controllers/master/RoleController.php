<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;
use App\Models\master\RoleModel;

class RoleController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'role'];

    public function index()
    {
        $roleModel    = new RoleModel();
        $page           = $this->request->getVar('page_') ?: '1';
        $perPage        = 2;
        $totalPage      = $roleModel->countAll();

        $this->data = [
            ...$this->data,
            'parent_title'  => 'Role / Jabatan',
            'title'         => 'Daftar Role / Jabatan',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, '']
        ];

        $this->data['list_role']  = $roleModel->paginate($perPage, '', $page);
        $this->data['pager']        = $roleModel->pager;

        return render($this, 'admin/role/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Roles',
            'title'         => 'Buat Role Baru',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'admin/role/create', $this->data);
    }

    public function actionCreate()
    {
        $roleModel    = new RoleModel();
        $rules          = $this->getValidationRules();

        if (! $this->validate($rules)) {
            return redirect()
            ->back()
            ->withInput()
            ->with(
                'errors', 
                $this->validator->getErrors()
            );
        }
        
        $data = [
            "role_id"           => $this->request->getPost('role_id'),
            'role_name'         => $this->request->getPost('role_name'),
            'active'           => 1,
        ];
        

        $saved = $roleModel->insert($data);

        return redirect()->to('/master/roles');

    }

    public function edit($id = null)
    {
        $MRole = new RoleModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Roles',
            'title'         => 'Edit Role',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']

        ];
        $this->data['role_id']  = $id;
        $this->data['role']     = $MRole->where('role_id', $id)->first();
        
        return render($this, 'admin/role/edit', $this->data);
    }

    public function actionEdit($id = null)
    {
        $roleModel    = new RoleModel();
        $rules          = $this->getValidationRules();

        if (! $this->validate($rules)) {
            return redirect()
            ->back()
            ->withInput()
            ->with(
                'errors', 
                $this->validator->getErrors()
            );
        }
        
        $data = [
            "role_id"           => $this->request->getPost('role_id'),
            'role_name'         => $this->request->getPost('role_name'),
            'active'           => 1,
        ];
        

        $saved = $roleModel->save($data);

        return redirect()->to('/master/roles');

    }


    public function detail($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Roles',
            'title'         => 'Detail Role',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        return render($this, 'admin/role/detail', $this->data);
    }


    function getValidationRules() 
    {
        return [
            'role_id'    => 'required',
        ];
    }
    
}
