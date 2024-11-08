<?php

class About {
    public function index($nama = 'urel', $pekerjaan = 'mahasiswa', $umur = 0)
    {
        echo "Hallo nama saya $nama, saya adalah seorang $pekerjaan. saya berumur $umur tahun";
    }

    public function page()
    {
        echo "About/Page";
    }
}