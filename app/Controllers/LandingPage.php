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
        return view('landing_page/page');
    }
}
