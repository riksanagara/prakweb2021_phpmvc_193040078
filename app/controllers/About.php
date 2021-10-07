<?php
/** 
 * Riksa Kusumah Nagara
 * 193040078
 * https://github.com/riksanagara/prakweb2021_phpmvc_193040078
*/

class About extends Controller {
    public function index($nama = 'Riksa', $pekerjaan = 'Mahasiswa', $umur = 21)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
}