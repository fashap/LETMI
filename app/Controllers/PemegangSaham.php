<?php

namespace App\Controllers;

class PemegangSaham extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Pemegang Saham'
        ];
        echo view('pemegang_saham/view_pemegang_saham', $data);
    }
}
