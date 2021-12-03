<?php

class Rota {
    public function __construct(){
        $this->url();
    }

    public function url(){
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if(isset($url)){
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            print_r($url);
        }
    }
}