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
        $MCabang        = new CabangModel();
        helper('static_data_helper');
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

    public function createAction()
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
            "branch_code"   => $this->request->getPost('branch_code'),
            'sales_code'    => $this->request->getPost('sales_code'),
            'cust_code'     => $this->request->getPost('cust_code'),
            'period_code'   => $this->request->getPost('period_code'),
            'sp_code'       => $this->request->getPost('sp_code'),
            'trans_date'    => $this->request->getPost('trans_date'),
            'status'        => $this->request->getPost('status'),
            'empl_code'     => $this->request->getPost('empl_code'),
            'sp_note'       => $this->request->getPost('sp_note'),
            'printed'       => $this->request->getPost('printed'),
            'edit_date'     => $this->request->getPost('edit_date'),
            'exp_date'      => $this->request->getPost('exp_date'),
            'user_id'       => $this->request->getPost('user_id'),
            'pay_month'     => $this->request->getPost('pay_month'),
            'dana'          => $this->request->getPost('dana'),
            'tipe'          => $this->request->getPost('tipe'),
            'draft'         => $this->request->getPost('draft'),
            'approved'      => $this->request->getPost('approved'),
        ];
        

        $saved = $mCustomerModel->insert($data);

        return redirect()->to('/master/customer');

    }

    public function edit($id = null)
    {
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Customer',
            'title'         => 'Edit Customer',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']

        ];
        
        return render($this, 'master/customer/edit', $this->data);
    }

    public function editAction($id = null)
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
            "branch_code"   => $this->request->getPost('branch_code'),
            'sales_code'    => $this->request->getPost('sales_code'),
            'cust_code'     => $this->request->getPost('cust_code'),
            'period_code'   => $this->request->getPost('period_code'),
            'sp_code'       => $this->request->getPost('sp_code'),
            'trans_date'    => $this->request->getPost('trans_date'),
            'status'        => $this->request->getPost('status'),
            'empl_code'     => $this->request->getPost('empl_code'),
            'sp_note'       => $this->request->getPost('sp_note'),
            'printed'       => $this->request->getPost('printed'),
            'edit_date'     => $this->request->getPost('edit_date'),
            'exp_date'      => $this->request->getPost('exp_date'),
            'user_id'       => $this->request->getPost('user_id'),
            'pay_month'     => $this->request->getPost('pay_month'),
            'dana'          => $this->request->getPost('dana'),
            'tipe'          => $this->request->getPost('tipe'),
            'draft'         => $this->request->getPost('draft'),
            'approved'      => $this->request->getPost('approved'),
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
        ];
    }

    
}
