<?php

class Rota {
    
    private $controlador = 'Paginas'; // Controlador padrão

    public function __construct(){ // Método construtor que faz o require dos controllers
        $url = $this->url() ? $this->url() : [0];

        if(file_exists('../app/Controllers/' . ucwords($url[0]) . '.php')){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/Controllers/' . $this->controlador . '.php';
        $this->controlador = new $this->controlador;

    }

    public function url(){ // Método que retorna a url
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if(isset($url)){
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            return ($url);
        }
    }
}