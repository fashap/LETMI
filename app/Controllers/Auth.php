<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use Config\Services;

class Auth extends BaseController
{
    protected $userModels;
    public function __construct()
    {
        $this->userModels = new ModelUser();
    }

    public function index()
    {
        $data = [
            'validation' => Services::validation()
        ];

        return view('auth/login', $data);
    }

    public function login()
    {
        // return view('auth/login');
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // dd($password);
        $rules = [
            'username' => 'required',
            'password' => 'required'

        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = $this->userModels->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verified_pass = password_verify($password, $pass);

            if ($verified_pass) {
                $session_data = [
                    'idUser' => $data['idUser'],
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'is_login' => true
                ];
                $session->set($session_data);
                return redirect()->to('LandingPage/index');
            } else {
                $session->setFlashdata('erorr', 'Data yang dimasukan salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('erorr', 'Data yang dimasukan salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    /* public function loginProcess()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('user')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        echo "$user";
        if ($user) {
            if (password_verify($post['password'], $user->password)) {
                $params = ['idUser => $user->idUser'];
                session()->set($params);
                return redirect()->to(site_url('/home'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }*/
}
