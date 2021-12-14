<?php

    class Empresa{

        public function cadastrarEmpresa($dados){

            $sql = new Database();
            $result = $sql->select("SELECT * FROM empresas WHERE nome = :nome", array(
                ":nome" => $dados['nome']
            ));

            if(count($result) > 0){ // Se houver alguma empresa com o nome informado
                return array(
                    'mensagem' => 'Empresa já cadastrada',
                    'status' => 'error'
                );
            } else { // Se não houver empresa com o nome informado
                $query = "INSERT INTO empresas (";
                $query2 = "VALUES (";
    
                foreach($dados as $campo => $valor){
                    $query .= $campo . ", ";
                    $query2 .= ":" .strtoupper($campo). ", "; 
                    $array[":" .strtoupper($campo)] = $valor;
                }
                $query = substr($query, 0, -2);
                $query2 = substr($query2, 0, -2);
                $query .= ") ";
                $query2 .= ")";
                $query = $query . $query2;
    
                if($sql->insere($query, $array)){
                    return ['status' => 'sucesso', 'mensagem' => 'Empresa cadastrada com sucesso!'];
                }
                else{
                    return ['status' => 'erro', 'mensagem' => 'Erro ao cadastrar empresa!'];
                }
            }

            
        }

        public function listarEmpresas(){
            $sql = new Database();
            $query = "SELECT id, nome FROM empresas WHERE id_user = :id_user";

            $array = array(
                ':id_user' => $_SESSION['usuario']['id']
            );
            $options = "";
            if($result = $sql->select($query, $array)){
                $options = "<option value=''>Selecione uma empresa</option>";
                foreach($result as $empresa){
                    $options .= "<option value='" . $empresa['id'] . "'>" . $empresa['nome'] . "</option>";
                }
            }
            else{
                $options .= "<option value=''>Cadastre uma empresa</option>";
            }

            return $options;
        }
    }