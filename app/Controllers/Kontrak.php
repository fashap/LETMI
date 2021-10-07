<?php

namespace App\Controllers;

class Kontrak extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Kontrak'
        ];
        echo view('kontrak/view_kontrak', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Kontrak | Tambah Data'
        ];
        echo view('kontrak/tambah_kontrak', $data);
    }
}
