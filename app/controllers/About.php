<?php

class About {
    public function index($nama = 'Riksa', $pekerjaan = 'Mahasiswa')
    {
        echo "Hallo, nama saya $nama saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}