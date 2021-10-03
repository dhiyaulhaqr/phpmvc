<?php

class About {
    public function index($nama = 'dhiya', $pekerjaan = 'mahasiswa')
    {
        echo "Halo, nama saya $nama seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}