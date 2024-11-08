<?php

class About {
    public function index($nama = 'urel', $pekerjaan = 'mahasiswa')
    {
        echo "Hallo nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo "About/Page";
    }
}