<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        if (!session('is_login')) {
            session()->setFlashdata('pesanerror', 'Anda harus login dulu untuk menambahkan ke keranjang');
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Home | LETMI'
        ];;
        return view('landing_page/page', $data);
    }

    public function profilePerusahaan()
    {
        $data = [
            'title' => 'Home | Profile Perusahaan'
        ];
        echo view('landing_page/profile_perusahaan', $data);
    }

    public function tampil()
    {
        return view('landing_page/tampil');
    }
}
