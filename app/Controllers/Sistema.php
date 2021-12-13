<?php

    class Sistema extends Controller {

        public function index($nomeSistema = '') {
            session_start();
            if(isset($_SESSION['usuario'])) {
                $dados = array(
                    'nomeSistema' => $nomeSistema
                );
                $this->view('sistema/index', $dados);
            } else {
                header('Location: '.BASE_URL.'/login');
            }
            $this->view('sistema/'.$nomeSistema);
        }
    }