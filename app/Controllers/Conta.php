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

    public function cadastre($usuario = '', $senha = '')
    {
        $dados = [
            'usuario' => $usuario,
            'senha' => $senha
        ];

        $this->view('conta/cadastre', $dados);
    }


}