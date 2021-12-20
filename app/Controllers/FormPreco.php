<?php

    class FormPreco extends Controller {

        public function index() {
            $this->seLogin('formPreco/index');
        }

        public function cadastrarEmpresa(){
            if(isset($_POST) && !empty($_POST)){
                $_POST['id_user'] = $_SESSION['usuario']['id'];
                $empresa = new Empresa();
                $result = $empresa->cadastrarEmpresa($_POST);
                $this->seLogin('formPreco/index', $result);
            }
        }

        public function regras(){
            $this->seLogin('formPreco/regras');
        }

        public function seLogin($view, $array = array()){
            if(isset($_SESSION['usuario']['id']) && !empty($_SESSION['usuario']['id'])){
                $this->view($view, $array);
            }else{
                $this->view('conta/index');
            }
        }
    }