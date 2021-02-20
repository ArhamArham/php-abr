<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function index()
    {
        $params = [
            'name' => 'Arham roshan ar'
        ];
        return $this->view('contact', $params);
    }

    public function store(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        return 'store';
    }
}
