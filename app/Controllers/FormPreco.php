<?php

    class FormPreco extends Controller {

        public function index() {
            $estados = new Estado();
            $empresa = new Empresa();
            $array = array(
                'estados' => $estados->listarEstados(),
                'options' => $empresa->listarEmpresas()
            );
            
            $this->seLogin('formPreco/index', $array);
        }

        public function cadastrarEmpresa(){
            $estados = new Estado();
            $empresa = new Empresa();

            $array = array(
                'estados' => $estados->listarEstados(),
                'options' => $empresa->listarEmpresas()
            );

            if(isset($_POST) && !empty($_POST)){
                $_POST['id_user'] = $_SESSION['usuario']['id'];
                $array['empresas'] = $empresa->cadastrarEmpresa($_POST);
            }
            // exit(print_r($array));
            $this->seLogin('formPreco/index', $array);
        }

        public function regras(){
            $this->seLogin('formPreco/regras');
        }

        public function salvarRegras(){
            if(isset($_POST['regra']) && !empty($_POST['regra'])){
                $empresa = new Empresa();
                $result = $empresa->salvarRegras($_POST);
            }
        }

        public function configuracoes(){
            $estados = new Estado();
            $dados = array(
                'estados' => $estados->listarEstados(),
                'aliquotas' => $estados->listarAliquotas()
            );
            $this->seLogin('formPreco/configuracoes', $dados);
        }

        public function selecionarFiliais(){
            $empresa = new Empresa();

            $empresa1 = $_POST['empresa1'];
            $empresa2 = $_POST['empresa2'];
            $empresa->selecionarFiliais($empresa1, $empresa2);

        }
    }