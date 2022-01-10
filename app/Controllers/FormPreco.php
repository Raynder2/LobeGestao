<?php

    class FormPreco extends Controller {

        public function index() {
            $estados = new Estado();
            $empresa = new Empresa();
            $array = array(
                'estados' => $estados->listarEstados(),
                'options' => $empresa->listarEmpresas(),
                'seletores' => $empresa->listarSeletores()
            );
            
            $this->seLogin('formPreco/index', $array);
        }

        public function cadastrarEmpresa(){
            $estados = new Estado();
            $empresa = new Empresa();

            $array = array(
                'estados' => $estados->listarEstados(),
                'options' => $empresa->listarEmpresas(),
                'seletores' => $empresa->listarSeletores()
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

        public function salvarGeral(){
            if(isset($_POST['regra']) && !empty($_POST['regra'])){
                $empresa = new Empresa();
                $result = $empresa->salvarRegras($_POST);
                exit();
            }
            if(isset($_POST['seletor']) && !empty($_POST['seletor'])){
                $empresa = new Empresa();
                $result = $empresa->salvarSeletor($_POST);
                exit();
            }
        }

        public function configuracoes($parametros = null){
            $estados = new Estado();
            $dados = array(
                'estados' => $estados->listarEstados(),
                'aliquotas' => $estados->listarAliquotas()
            );
            if($parametros != null){
                $dados['configurador'] = $parametros;
            }
            $this->seLogin('formPreco/configuracoes', $dados);
        }

        public function selecionarFiliais(){
            $empresa = new Empresa();

            $empresa1 = $_POST['empresa1'];
            $empresa2 = $_POST['empresa2'];
            $empresa->selecionarFiliais($empresa1, $empresa2);

        }

        public function alterarAliquotas(){
            $estado = new Estado();

            if(isset($_POST) && !empty($_POST)){
                $estado->alterarAliquotas($_POST);
            }

        }

        public function listarSeletoresCadastrados(){
            if(isset($_POST) && !empty($_POST)){
                $empresa = new Empresa();
                $result = $empresa->listarSeletoresCadastrados($_POST['referencia']);
                exit(json_encode($result));
            }
        }
    }