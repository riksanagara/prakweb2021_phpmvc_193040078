<?php

/** 
 * Riksa Kusumah Nagara
 * 193040078
 * https://github.com/riksanagara/prakweb2021_phpmvc_193040078
*/

class Controller {
    public function view ($view, $data = [])
    {
        require_once '../App/views/' . $view . '.php';
    }
}