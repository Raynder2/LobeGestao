<?php

    class FormPreco extends Controller {

        public function index() {
            $this->view('formPreco/index');
        }

        public function cadastrarEmpresa(){
            if(isset($_POST) && !empty($_POST)){
                $_POST['id_user'] = $_SESSION['usuario']['id'];
                $empresa = new Empresa();
                $result = $empresa->cadastrarEmpresa($_POST);
                $this->view('formPreco/index', $result);
            }
        }
    }