<?php

class App {
    protected $controller = 'Home',
              $method     = 'index',
              $params     = [];

    public function __construct() 
    {
        $url = $this->parseURL();
        
        // Controller
        if (isset($url[0]) && file_exists('../App/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../App/controllers/' . $this->controller . '.php';
        
        if (class_exists($this->controller)) {
            $this->controller = new $this->controller;
        } else {
            echo "Controller tidak ditemukan!";
            return;
        }

        // Method
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Kelola parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Jalankan controller & method, serta kirimkan params jika ada 
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() 
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return []; // Mengembalikan array kosong jika tidak ada URL
    }
}
