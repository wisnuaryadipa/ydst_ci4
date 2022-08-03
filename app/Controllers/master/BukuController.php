<?php

namespace App\Controllers\master;


use App\Controllers\BaseController;
use App\Models\master\BukuModel;

class BukuController extends BaseController
{

    const PARENT_BREADCRUMB = ['home', 'master', 'buku'];

    public function index()
    {
        $bukuModel  = new BukuModel();
        $page       = $this->request->getVar('page_') ?: '1';
        $perPage    = 2;

        $this->data = [
            ...$this->data,
            'parent_title'  => 'Buku',
            'title'         => 'Daftar Buku',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, '']
        ];

        $this->data['list_buku']    = $bukuModel->paginate($perPage, '', $page);
        $this->data['pager']        = $bukuModel->pager;
        return render($this, 'master/buku/index', $this->data);
    }

    public function create()
    {
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Buku',
            'title'         => 'Buat Buku Baru',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'create']
        ];
        
        return render($this, 'master/buku/create', $this->data);
    }

    public function actionCreate()
    {
        $bukuModel  = new BukuModel();
        $rules      = $this->getValidationRules();

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        $data = [
            // "book_code"     => $this->request->getPost('book_code'),
            'book_title'    => $this->request->getPost('book_title'),
            'Pages'         => $this->request->getPost('Pages'),
            'Paper_size'    => $this->request->getPost('Paper_size'),
            'Paper_code'    => $this->request->getPost('Paper_code'),
            'C_color_code'  => $this->request->getPost('C_color_code'),
            'writer'        => $this->request->getPost('writer'),
            'book_tipe'     => $this->request->getPost('book_tipe'),
            'isbn'          => $this->request->getPost('isbn')
        ];
        

        $saved = $bukuModel->insert($data);

        return redirect()->to('/master/buku');
    }

    public function edit($id = null)
    {
        $Book = new BukuModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Buku',
            'title'         => 'Edit Buku',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']

        ];

        $this->data['book_code']  = $id;
        $this->data['book']       = $Book->where('book_code', $id)->first();
        
        
        return render($this, 'master/buku/edit', $this->data);
    }

    public function actionEdit($id = null)
    {
        $bukuModel  = new BukuModel();
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
            // "book_code"         => $this->request->getPost('book_code'),
            'book_title'        => $this->request->getPost('book_title'),
            'Pages'             => $this->request->getPost('Pages'),
            'Paper_size'        => $this->request->getPost('Paper_size'),
            'Paper_code'        => $this->request->getPost('Paper_code'),
            'C_color_code'      => $this->request->getPost('C_color_code'),
            'writer'            => $this->request->getPost('writer'),
            'book_tipe'         => $this->request->getPost('book_tipe'),
            'isbn'              => $this->request->getPost('isbn'),
        ];

        $saved = $bukuModel->save($data);
        return redirect()->to('/master/buku/'.$id);
    }

    public function detail($id = null)
    {
        $Book = new BukuModel();
        $this->data = [
            ...$this->data,
            'parent_title'  => 'Buku',
            'title'         => 'Detail Buku',
            'acc_signed'    => $this->acc_signed,
            'breadcrumb'    => [...self::PARENT_BREADCRUMB, 'edit']
        ];
        
        $this->data['book'] = $Book->where('book_code', $id)->first();
        return render($this, 'master/buku/detail', $this->data);
    }

    
    function getValidationRules() 
    {
        return [
            'book_code'    => 'required',
        ];
    }
}
