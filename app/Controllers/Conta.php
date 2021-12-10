<?php

class Conta extends Controller
{
    public function index()
    {
        $this->view('conta/index');
    }

    public function entrar($usuario = '', $senha = '')
    {
        $dados = [
            'usuario' => $usuario,
            'senha' => $senha
        ];

        $this->view('conta/entrar', $dados);
    }

    public function cadastre()
    {
        if($_POST) {
            $dados = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => $_POST['senha'],
                'confirmarSenha' => $_POST['confirmarSenha'],
                'cnpj' => $_POST['cnpj']
            ];

            $user = new Usuario();
            $retorno = $user->cadastrar($dados);
            $this->view('conta/cadastre', $retorno);
        }
        else{
            $this->view('conta/cadastre');
        }

    }


}