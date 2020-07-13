<?php

class About extends Controller
{
    public function index($nama = 'Hafizh Maulana Y', $profesi = 'Programmer')
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
