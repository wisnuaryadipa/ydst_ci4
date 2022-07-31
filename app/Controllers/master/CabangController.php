<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;
use App\Models\master\CabangModel;

class CabangController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'cabang'];

    public function index()
    {
        $cabangModel    = new CabangModel();
        $page           = $this->request->getVar('page_') ?: '1';
        $perPage        = 2;
        $totalPage      = $cabangModel->countAll();
        
        $this->data     = [
            ...$this->data,
            'parent_title'  => 'Cabang',
            'title'         => 'Daftar Cabang',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, '']
        ];

        $this->data['list_cabang']  = $cabangModel->paginate($perPage, '', $page);
        $this->data['pager']        = $cabangModel->pager;

        return render($this, 'master/cabang/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Cabang',
            'title'         => 'Buat Cabang Baru',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'master/cabang/create', $this->data);
    }

    public function actionCreate()
    {
        $rules = $this->getValidationRules();

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
            "branch_code"       => $this->request->getPost('branch_code'),
            'branch_name'       => $this->request->getPost('branch_name'),
            'address'           => $this->request->getPost('address'),
            'phone_no'          => $this->request->getPost('phone_no'),
            'contact_person'    => $this->request->getPost('contact_person'),
            'fax_no'            => $this->request->getPost('fax_no'),
            'warehouse_head'    => $this->request->getPost('warehouse_head'),
            'city'              => $this->request->getPost('city'),
            'email_address'     => $this->request->getPost('email_address'),
            'area_code'         => $this->request->getPost('area_code'),
            'active'            => $this->request->getPost('active'),
            'ans_code'          => $this->request->getPost('ans_code'),
            'branch_head'       => $this->request->getPost('branch_head'),
            'region'            => $this->request->getPost('region'),
            'warehouse_code'    => $this->request->getPost('warehouse_code'),
        ];
        
        $cabangModel = new CabangModel();

        $saved = $cabangModel->insert($data);

        return redirect()->to('/master/cabang');

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

        $cabangModel = new CabangModel();
        $this->data['branch_code'] = $id;
        $this->data['cabang'] = $cabangModel->where('branch_code', $id)->first();
        
        return render($this, 'master/cabang/edit', $this->data);
    }

    public function actionEdit($id = null)
    {
        $rules = $this->getValidationRules();

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            "branch_code"       => $this->request->getPost('branch_code'),
            'branch_name'       => $this->request->getPost('branch_name'),
            'address'           => $this->request->getPost('address'),
            'phone_no'          => $this->request->getPost('phone_no'),
            'contact_person'    => $this->request->getPost('contact_person'),
            'fax_no'            => $this->request->getPost('fax_no'),
            'warehouse_head'    => $this->request->getPost('warehouse_head'),
            'city'              => $this->request->getPost('city'),
            'email_address'     => $this->request->getPost('email_address'),
            'area_code'         => $this->request->getPost('area_code'),
            'active'            => $this->request->getPost('active'),
            'ans_code'          => $this->request->getPost('ans_code'),
            'branch_head'       => $this->request->getPost('branch_head'),
            'region'            => $this->request->getPost('region'),
            'warehouse_code'    => $this->request->getPost('warehouse_code'),
        ];
        
        $cabangModel = new CabangModel();

        $saved = $cabangModel->save($data);

        return redirect()->to('/master/cabang/'.$id);

    }


    public function detail($id = null)
    {
        $cabangModel    = new CabangModel();
        $this->data     = [
            ...$this->data,
            'parent_title'  => 'Cabang',
            'title'         => 'Detail Cabang',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        $this->data['branch_code']  = $id;
        $this->data['cabang']       = $cabangModel->where('branch_code', $id)->first();

        return render($this, 'master/cabang/detail', $this->data);
    }

    function getValidationRules() 
    {
        return [
            'email_address'    => 'required|max_length[254]|valid_email',
        ];
    }
}
