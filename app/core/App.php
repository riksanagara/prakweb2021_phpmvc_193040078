<?php

/** 
 * Riksa Kusumah Nagara
 * 193040078
 * https://github.com/riksanagara/prakweb2021_phpmvc_193040078
*/

class App{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}