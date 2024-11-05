<?php

class App {
    protected $controller = 'home',
              $method     = 'index',
              $prams      = [];

    public function __construct() 
    {
        $url = $this->parseURL();
        
        // ngecek jika ada sebuah file didalam folder controllers yang namanya sama seperti yang ditulis di url
        // controller
        if( file_exists('../App/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../App/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;;
    }

    public function parseURL() 
    {
        if( isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); //function rtrim untuk menghapus slash di akhir url nya jika ada
            $url = filter_var($url, FILTER_SANITIZE_URL); // supaya url nya bersih dari karakter karakter aneh 
            $url = explode('/', $url); // merubah url nya menjadi elemen array

            return $url;
        }
    }
}