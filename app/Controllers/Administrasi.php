<?php

namespace App\Controllers;

class Administrasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Administrasi LETMI'
        ];
        echo view('administrasi/view_administrasi', $data);
    }
}
