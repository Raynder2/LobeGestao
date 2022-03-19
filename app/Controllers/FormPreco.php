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

        public function listarEstados(){
            $estado = new Estado();
            echo('estadosListados'.$estado->listarEstados());
            exit();
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
            $empresa = new Empresa();
            $arrayCampos = array(
                'entradas' => $empresa->listarCampos('entradas'),
                'saidas' => $empresa->listarCampos('saidas'),
                'empresa' => $empresa->listarCampos('empresa'),
                'controle' => $empresa->listarCampos('controle')
            );
            
            $this->seLogin('formPreco/regras', $arrayCampos);
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
            if(isset($_POST['campo']) && !empty($_POST['campo'])){
                $empresa = new Empresa();
                $result = $empresa->salvarCampo($_POST);
                exit();
            }
        }

        public function configuracoes($parametros = null){
            $estados = new Estado();
            $empresa = new Empresa();

            $dados = array(
                'estados' => $estados->listarEstados(),
                'aliquotas' => $estados->listarAliquotas(),
                'resultados' => $empresa->listar($parametros),
                'listas' => ['campos', 'regras'],
                'lista' => $parametros
            );
            if($parametros != null){
                $dados['configurador'] = $parametros;
            }
            $this->seLogin('formPreco/configuracao', $dados);
        }

        public function selecionarFiliais(){
            $empresa = new Empresa();

            $empresa1 = $_POST['empresa1'];
            $empresa2 = $_POST['empresa2'];
            $empresa->selecionarFiliais($empresa1, $empresa2);

        }

        public function verificarAliquota(){
            $estados = new Estado();
            $origem = $_POST['origem'];
            $destino = $_POST['destino'];

            $resul = $estados->verificarAliquota($origem, $destino);
            echo("Resultado Alq:".$resul."|");
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

        public function listarCamposCadastrados(){
            if(isset($_POST) && !empty($_POST)){
                $empresa = new Empresa();
                $result = $empresa->listarCamposCadastrados($_POST['referencia']);
                exit(json_encode($result));
            }
        }

        public function listarCamposSelecionados(){
            $referencia = $_POST['referencia'];
            $empresa = new Empresa();
            $result = $empresa->listarCampos($referencia);
            exit(json_encode($result));
        }

        public function exluirGeral(){
            if(isset($_POST['seletor']) && !empty($_POST['seletor'])){
                $empresa = new Empresa();
                $result = $empresa->excluirSeletor($_POST['seletor']);
                exit();
            }

        }

        public function apagartudo(){
            $empresa = new Empresa();
            $empresa->apagarTudo();
        }
    }