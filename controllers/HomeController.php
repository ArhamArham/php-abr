<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('home');
    }
}
