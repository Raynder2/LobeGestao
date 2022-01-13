<?php

    class Banco extends Controller{
        public function index(){
            CriarBanco::criar();
        }

        public function inserir(){
            CriarBanco::inserir();
        }
    }