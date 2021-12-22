<?php

    class Banco extends Controller{
        public function index(){
            CriarBanco::criarBanco();
        }
    }