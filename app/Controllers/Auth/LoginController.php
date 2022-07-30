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

    public function loginAction(): RedirectResponse
    {
        // Validate here first, since some things,
        // like the password, can only be validated properly here.
        $rules = $this->getValidationRules();

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $credentials             = $this->request->getPost(setting('Auth.validFields'));
        $credentials             = array_filter($credentials);
        $credentials['password'] = $this->request->getPost('password');
        $remember                = (bool) $this->request->getPost('remember');

        // Attempt to login
        $result = auth('session')->remember($remember)->attempt($credentials);
        if (! $result->isOK()) {
            return redirect()->route('login')->withInput()->with('error', $result->reason());
        }

        // If an action has been defined for login, start it up.
        $actionClass = setting('Auth.actions')['login'] ?? null;
        if (! empty($actionClass)) {
            return redirect()->route('auth-action-show')->withCookies();
        }

        return redirect()->to(config('Auth')->loginRedirect())->withCookies();
    }

    protected function getValidationRules(): array
    {
        return setting('Validation.login') ?? [
            //'username' => 'required|max_length[30]|alpha_numeric_space|min_length[3]',
            'email'    => 'required|max_length[254]|valid_email',
            'password' => 'required',
        ];
    }

}