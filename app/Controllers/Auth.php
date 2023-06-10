<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->admin = new AdminModel();
    }

    public function index() {
        return redirect()->to(site_url('login'));
    }

    public function login() {
        if (session('id')) {
            return redirect()->to(site_url('dashboard'));
        }
        return view('auth/login');
    }

    public function loginProcess() {
        $post = $this->request->getPost();
        $query = $this->admin->table('tb_admin')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        
        if ($user) {
            if (password_verify($post['password'], $user->password)) {
                $params = ['id' => $user->id];
                session()->set($params);

                return redirect()->to(site_url('dashboard'));
            } else {
                return redirect()->back()->with('error', 'Password anda salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan!');
        }
        
    }

    public function logout() {
        session()->remove('id');
        return redirect()->to(site_url('login'));
    }

    public function register() {
        return view('auth/register');
    }

    public function registerProcess() {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
        ];

        $this->admin->table('tb_admin')->insert($data);

        if ($this->admin->affectedRows() > 0) {
            return redirect()->to(site_url('login'))->with('success', 'Berhasil Membuat Akun');
        }
    }
}
