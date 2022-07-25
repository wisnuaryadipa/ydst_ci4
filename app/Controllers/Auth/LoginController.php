<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class LoginController extends BaseController
{
    const PARENT_BREADCRUMB = ['home', 'master', 'buku'];
    protected $helpers = ['auth', 'setting'];

    /**
     * Displays the form the login to the site.
     *
     * @return RedirectResponse|string
     */
    public function loginView()
    {
        if (auth()->loggedIn()) {
            return redirect()->to(config('Auth')->loginRedirect());
        }
        $this->data = [
            ...$this->data,
            'parent_title' => 'Users',
            'title' => 'Daftar User',
            'acc_signed' => $this->acc_signed,
            'breadcrumb' => [...self::PARENT_BREADCRUMB, '']
        ];
        return render($this, setting('Auth.views')['login'], $this->data, "blank");
    }

}