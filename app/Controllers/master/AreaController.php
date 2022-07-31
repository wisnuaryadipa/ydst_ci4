<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;
use App\Models\master\AreaModel;

class AreaController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'area'];

    public function index()
    {
        $areaModel  = new AreaModel();
        $page       = $this->request->getVar('page_') ?: '1';
        $perPage    = 2;

        $this->data = [
            ...$this->data,
            'parent_title'  => 'Area',
            'title'         => 'Daftar Area',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, '']
        ];

        $this->data['list_area']    = $areaModel->paginate($perPage, '', $page);
        $this->data['pager']        = $areaModel->pager;

        return render($this, 'master/area/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Area',
            'title'         => 'Buat Area Baru',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'master/area/create', $this->data);
    }

    public function actionCreate()
    {
        $areaModel  = new AreaModel();
        $rules      = $this->getValidationRules();

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
            "area_code"     => $this->request->getPost('area_code'),
            'area_name'     => $this->request->getPost('area_name'),
            'area_head'     => $this->request->getPost('area_head'),
            'address'       => $this->request->getPost('address'),
            'city'          => $this->request->getPost('city'),
            'fax_no'        => $this->request->getPost('fax_no'),
            'phone_no'      => $this->request->getPost('phone_no'),
            'email_address' => $this->request->getPost('email_address'),
        ];
        

        $saved = $areaModel->insert($data);

        return redirect()->to('/master/area');

    }

    public function edit($id = null)
    {
        $areaModel  = new AreaModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Area',
            'title'         => 'Edit Area',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']

        ];

        $this->data['area_code']    = $id;
        $this->data['area']         = $areaModel->where('area_code', $id)->first();
        
        return render($this, 'master/area/edit', $this->data);
    }

    public function actionEdit($id = null)
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
            "area_code"     => $this->request->getPost('area_code'),
            'area_name'     => $this->request->getPost('area_name'),
            'area_head'     => $this->request->getPost('area_head'),
            'address'       => $this->request->getPost('address'),
            'city'          => $this->request->getPost('city'),
            'fax_no'        => $this->request->getPost('fax_no'),
            'phone_no'      => $this->request->getPost('phone_no'),
            'email_address' => $this->request->getPost('email_address'),
        ];
        
        $areaModel = new AreaModel();

        $saved = $areaModel->save($data);

        return redirect()->to('/master/area/'.$id);

    }

    public function detail($id = null)
    {
        $areaModel = new AreaModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Area',
            'title'         => 'Detail Area',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        $this->data['area_code']    = $id;
        $this->data['area']         = $areaModel->where('area_code', $id)->first();
        return render($this, 'master/area/detail', $this->data);
    }

    function getValidationRules() 
    {
        return [
            'email_address'    => 'required|max_length[254]|valid_email',
        ];
    }

    
}
