<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'Index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if ($url == null) {
            $url = [$this->controller, $this->method];
        }

        // Controller
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // // jalankan controller & method serta kirimkan parameter jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');

            // membersihkan url abstrak(ngaco) menggunakan filter_var
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // memecah url menghapus / dan menjadikan string-string sebagai array
            $url = explode('/', $url);
            return $url;
        }
    }
}
