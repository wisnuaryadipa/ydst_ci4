<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;
use App\Models\master\MCustomerModel;
use App\Models\master\CabangModel;

class CustomerController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'customer'];

    public function index()
    {
        $MCustomer      = new MCustomerModel();
        $page           = $this->request->getVar('page_') ?: '1';
        $perPage        = 2;
        $totalPage      = $MCustomer->countAll();

        $this->data = [
            ...$this->data,
            'parent_title'  => 'Customer',
            'title'         => 'Daftar Customer',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, '']
        ];

        $this->data['list_customer']  = $MCustomer->paginate($perPage, '', $page);
        $this->data['pager']        = $MCustomer->pager;

        return render($this, 'master/customer/index', $this->data);
    }

    public function create()
    {
        helper('static_data_helper');
        $MCabang        = new CabangModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Customer',
            'title'         => 'Buat Customer Baru',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'create']
        ];

        $this->data['list_tingkat']     = tingkatCustomer();
        $this->data['list_status']      = statusCustomer();
        $this->data['list_peringkat']   = peringkatSekolah();
        $this->data['list_cabang']           = $MCabang->getAll();
        
        return render($this, 'master/customer/create', $this->data);
    }

    public function actionCreate()
    {
        $mCustomerModel = new MCustomerModel();
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
            "cust_code"             => $this->request->getPost('cust_code'),
            'cust_name'             => $this->request->getPost('cust_name'),
            'address'               => $this->request->getPost('address'),
            'phone_no'              => $this->request->getPost('phone_no'),
            'fax_no'                => $this->request->getPost('fax_no'),
            'contact_person'        => $this->request->getPost('contact_person'),
            'province'              => 1,
            'city'                  => 2,
            'camat_kode'            => 12,
            'ans_code'              => $this->request->getPost('ans_code'),
            'branch_code'           => $this->request->getPost('branch_code'),
            'school_grade'          => $this->request->getPost('school_grade'),
            'npsn'                  => $this->request->getPost('npsn'),
            'reg_date'              => $this->request->getPost('reg_date'),
            'npwp'                  => $this->request->getPost('npwp'),
            'reason_deactivated'    => $this->request->getPost('reason_deactivated'),
            'reason_deactivated'    => $this->request->getPost('reason_deactivated'),
            'school_email'          => $this->request->getPost('school_email'),
            'cp_email'              => $this->request->getPost('cp_email'),
        ];
        

        $saved = $mCustomerModel->insert($data);

        return redirect()->to('/master/customer');

    }

    public function edit($id = null)
    {
        helper('static_data_helper');
        $MCabang        = new CabangModel();
        $MCustomer      = new MCustomerModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Customer',
            'title'         => 'Edit Customer',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']

        ];

        $this->data['list_tingkat']     = tingkatCustomer();
        $this->data['list_status']      = statusCustomer();
        $this->data['list_peringkat']   = peringkatSekolah();
        $this->data['list_cabang']      = $MCabang->getAll();
        $this->data['customer']         = $MCustomer->where('cust_code', $id)->first();
        
        return render($this, 'master/customer/edit', $this->data);
    }

    public function actionEdit($id = null)
    {
        $mCustomerModel = new MCustomerModel();
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
            "cust_code"             => $this->request->getPost('cust_code'),
            'cust_name'             => $this->request->getPost('cust_name'),
            'address'               => $this->request->getPost('address'),
            'phone_no'              => $this->request->getPost('phone_no'),
            'fax_no'                => $this->request->getPost('fax_no'),
            'contact_person'        => $this->request->getPost('contact_person'),
            'province'              => 1,
            'city'                  => 2,
            'camat_kode'            => 12,
            'ans_code'              => $this->request->getPost('ans_code'),
            'branch_code'           => $this->request->getPost('branch_code'),
            'school_grade'          => $this->request->getPost('school_grade'),
            'npsn'                  => $this->request->getPost('npsn'),
            'reg_date'              => $this->request->getPost('reg_date'),
            'npwp'                  => $this->request->getPost('npwp'),
            'reason_deactivated'    => $this->request->getPost('reason_deactivated'),
            'active'                => $this->request->getPost('active'),
            'school_email'          => $this->request->getPost('school_email'),
            'cp_email'              => $this->request->getPost('cp_email'),
        ];

        $saved = $mCustomerModel->save($data);
        return redirect()->to('/master/customer/'.$id);

    } 

    public function detail($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Customer',
            'title'         => 'Detail Customer',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        return render($this, 'master/customer/detail', $this->data);
    }
    
    function getValidationRules() 
    {
        return [
            'cust_code' => 'required'
        ];
    }

    
}
