<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/auth_header', $data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }

    public function cekLogin()
    {
        if ($this->model('Auth_model')->login() > 0) {
            header("Location: " . BASEURL . '/mahasiswa');
            exit();
        }
    }
}
