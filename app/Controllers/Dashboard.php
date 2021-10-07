<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Dashboard'
        ];
        echo view('admin/dashboard', $data);
    }
}
