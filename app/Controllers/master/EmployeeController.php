<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;
use App\Models\master\CabangModel;
use App\Models\master\AreaModel;
use App\Models\master\UserModel;
use App\Models\master\EmployeeModel;

class EmployeeController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'karyawan'];

    public function index()
    {
        $employeeModel  = new EmployeeModel();
        $MUser          = new UserModel();
        $page           = $this->request->getVar('page_') ?: '1';
        $perPage        = 2;
        $totalPage      = $employeeModel->countAll();
        $this->data     = [
            ...$this->data,
            'parent_title'  => 'Karyawan',
            'title'         => 'Daftar Karyawan',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, '']
        ];
        $this->data['unemployedUsers']  = $MUser->getUnemployeedUsers();
        $this->data['employees']        = $employeeModel->paginate($perPage, '', $page);
        $this->data['pager']            = $employeeModel->pager;
        d($MUser->getUnemployeedUsers());
        return render($this, 'master/employee/index', $this->data);
    }

    public function create()
    {
        $areaModel = new AreaModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Karyawan',
            'title'         => 'Buat Karyawan Baru',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        $this->data['area_list'] = $areaModel->getAll();
        return render($this, 'master/karyawan/create', $this->data);
    }

    public function actionCreate()
    {
        $employeeModel    = new EmployeeModel();
        $rules            = $this->getValidationRules();

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
            "empl_code"         => $this->request->getPost('empl_code'),
            'empl_name'         => $this->request->getPost('empl_name'),
            'address'           => $this->request->getPost('address'),
            'city'              => $this->request->getPost('city'),
            'sex_id'            => $this->request->getPost('sex_id'),
            'stat_id'           => $this->request->getPost('stat_id'),
            'religion_id'       => $this->request->getPost('religion_id'),
            'zip_code'          => $this->request->getPost('zip_code'),
            'marital_id'        => $this->request->getPost('marital_id'),
            'grade_id'          => $this->request->getPost('grade_id'),
            'dept_id'           => $this->request->getPost('dept_id'),
            'salary'            => $this->request->getPost('salary'),
            'join_date'         => $this->request->getPost('join_date'),
            'resign_date'       => $this->request->getPost('resign_date'),
            'branch_code'       => $this->request->getPost('branch_code'),
            'birth_code'        => $this->request->getPost('birth_code'),
            'photo'             => $this->request->getPost('photo'),
            'phone_no'          => $this->request->getPost('phone_no'),
            'edu_background'    => $this->request->getPost('edu_background'),
            'active'            => $this->request->getPost('active'),
        ];
        

        $saved = $employeeModel->insert($data);

        return redirect()->to('/master/karyawan');

    }

    public function edit($id = null)
    {
        $areaModel = new AreaModel();
        $employeeModel = new EmployeeModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Karyawan',
            'title'         => 'Edit Karyawan',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']

        ];

        $this->data['areas']        = $areaModel->getAll();
        $this->data['employeeId']   = $id;
        $this->data['employees']    = $employeeModel->where('empl_code', $id)->first();
        
        return render($this, 'master/karyawan/edit', $this->data);
    }

    public function actionEdit($id = null)
    {
        $cabangModel = new CabangModel();
        $rules = $this->getValidationRules();

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            "empl_code"         => $this->request->getPost('empl_code'),
            'empl_name'         => $this->request->getPost('empl_name'),
            'address'           => $this->request->getPost('address'),
            'city'              => $this->request->getPost('city'),
            'sex_id'            => $this->request->getPost('sex_id'),
            'stat_id'           => $this->request->getPost('stat_id'),
            'religion_id'       => $this->request->getPost('religion_id'),
            'zip_code'          => $this->request->getPost('zip_code'),
            'marital_id'        => $this->request->getPost('marital_id'),
            'grade_id'          => $this->request->getPost('grade_id'),
            'dept_id'           => $this->request->getPost('dept_id'),
            'salary'            => $this->request->getPost('salary'),
            'join_date'         => $this->request->getPost('join_date'),
            'resign_date'       => $this->request->getPost('resign_date'),
            'branch_code'       => $this->request->getPost('branch_code'),
            'birth_code'        => $this->request->getPost('birth_code'),
            'photo'             => $this->request->getPost('photo'),
            'phone_no'          => $this->request->getPost('phone_no'),
            'edu_background'    => $this->request->getPost('edu_background'),
            'active'            => $this->request->getPost('active'),
        ];
        

        $saved = $employeeModel->save($data);

        return redirect()->to('/master/karyawan/'.$id);

    }


    public function detail($id = null)
    {
        $cabangModel    = new CabangModel();
        $this->data     = [
            ...$this->data,
            'parent_title'  => 'Karyawan',
            'title'         => 'Detail Karyawan',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        $this->data['employee_id']      = $id;
        $this->data['employees']        = $employeeModel->where('empl_code', $id)->first();

        return render($this, 'master/karyawan/detail', $this->data);
    }

    function getValidationRules() 
    {
        return [
            'email_address'    => 'required|max_length[254]|valid_email',
        ];
    }
}
