<?php

class About extends Controller {
    public function index($nama = 'urel', $umur = 0, $pekerjaan = 'mahasiswa')
    {
        $data["judul"] = 'About Me';
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    
    public function page()
    {
        $data["judul"] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}