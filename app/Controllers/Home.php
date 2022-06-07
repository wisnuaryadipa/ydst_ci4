<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data['test'] = 'test';
        return render($this, 'SuratPesanan/index', $data);
    }
}
