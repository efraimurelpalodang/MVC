<?php

class About extends Controller {
    public function index($nama = 'urel', $umur = 0, $pekerjaan = 'mahasiswa')
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('about/index', $data);
    }
    
    public function page()
    {
        $this->view('about/page');
    }
}