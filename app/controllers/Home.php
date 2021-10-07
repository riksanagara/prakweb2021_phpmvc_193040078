<?php
/** 
 * Riksa Kusumah Nagara
 * 193040078
 * https://github.com/riksanagara/prakweb2021_phpmvc_193040078
*/

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}