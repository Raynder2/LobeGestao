<?php

    class Sistema extends Controller {

        public function index($nomeSistema) {
            $this->view('sistema/'.$nomeSistema);
        }
    }