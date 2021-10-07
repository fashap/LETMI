<?php

namespace App\Controllers;

class TenagaAhli extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Tenaga AHli'
        ];
        echo view('tenaga_ahli/view_tenaga_ahli', $data);
    }
}
