<?php

class Register extends Controller
{
    public function index()
    {
        $data['judul'] = 'Registrasi';
        $this->view('templates/auth_header', $data);
        $this->view('auth/registrasi');
        $this->view('templates/footer');
    }

    public function insertdata()
    {
        if ($this->model('Auth_model')->insertDataUser() > 0) {
            Messages::setMessage('Berhasil ditambahkan, silahkan login', 'success');
            header("Location: " . BASEURL . '/login');
            exit();
        }
    }
}
