<?php

class About extends Controller {
    public function index($nama = 'urel', $pekerjaan = 'mahasiswa', $umur = 0)
    {
        $this->view('about/index');
    }
    
    public function page()
    {
        $this->view('about/page');
    }
}