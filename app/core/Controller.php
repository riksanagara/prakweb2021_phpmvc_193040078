<?php

/** 
 * Riksa Kusumah Nagara
 * 193040078
 * https://github.com/riksanagara/prakweb2021_phpmvc_193040078
*/

class Controller {
    public function view ($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}