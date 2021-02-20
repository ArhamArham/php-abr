<?php

namespace app\controllers;

use app\core\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        $this->setLayout('auth');
        return $this->view('auth/login');
    }

    public function showRegisterForm()
    {
        $this->setLayout('auth');
        return $this->view('auth/register');
    }

    public function login()
    {
        return 'logging you in';
    }

    public function register()
    {
        return 'register';
    }
}
