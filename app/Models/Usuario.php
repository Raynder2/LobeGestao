<?php

    class Usuario{

        private $sql;

        public function __construct(){ // 
            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
            date_default_timezone_set('America/Sao_Paulo');
            $this->sql = new Database();
        }

        public function cadastrar($dados){
            if($dados['senha'] == $dados['confirmarSenha']){
                // Verificar se o email ou o cnpj já está cadastrado
                $query = "SELECT * FROM usuarios WHERE cnpj = :cnpj OR email = :email";
                $array = array(
                    ':email' => $dados['email'],
                    ':cnpj' => $dados['cnpj']
                );
                $resul = $this->sql->select($query, $array);
                if(count($resul) > 0){
                    return ['status' => 'erro', 'msg' => 'Já existe um usuário com esse email ou CNPJ'];
                }
                else{
                    // Inserir usuario no banco de dados
                    $query = ("INSERT INTO usuarios (nome, email, senha, cnpj, status) VALUES (:nome, :email, :senha, :cnpj, :status)");
                    $array = array(
                        ':nome' => $dados['nome'],
                        ':email' => $dados['email'],
                        ':senha' => md5($dados['senha']),
                        ':cnpj' => $dados['cnpj'],
                        ':status' => 1
                    );
                    $resul = $this->sql->insere($query, $array);
                    if($resul){ // Se inseriu com sucesso
                        return ['status' => 'sucesso', 'msg' => 'Usuário cadastrado com sucesso!'];
                    }
                    else{ // Se não inseriu com sucesso
                        return ['status' => 'erro', 'msg' => 'Erro ao cadastrar usuário!'];
                    }
                }
            }else{ // Se as senhas não são iguais
                return ['status' => 'erro', 'msg' => 'As senhas não conferem!'];
            }
        }
    }