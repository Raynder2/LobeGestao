<?php

    class Empresa{

        // Método para cadastrar empresas
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

        // Método para listar empresas
        public function listarEmpresas(){
            if(isset($_SESSION['usuario']['id']) && !empty($_SESSION['usuario']['id'])){
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

        // Método para listar regras
        public function listarRegras(){
            $sql = new Database();
            $query = "SELECT * FROM regras";

            $result = $sql->select($query);
            return($result);
        }

        // Método para salvar regras
        public function salvarRegras($regra){
            $sql = new Database();
            $query = "INSERT INTO regras (regra, campoAlvo, criterios) VALUES (:regra, :campoAlvo, :criterios)";

            $array = array(
                ':regra' => $regra['regra'],
                ':campoAlvo' => $regra['campoAlvo'],
                ':criterios' => $regra['criterios']
            );
            if($sql->insere($query, $array)){
                return ['status' => 'sucesso', 'mensagem' => 'Regras salvas com sucesso!'];
            }
            else{
                return ['status' => 'erro', 'mensagem' => 'Erro ao salvar regras!'];
            }
        }

        // Método para salvar seletores
        public function salvarSeletor($seletor){
            $sql = new Database();
            $query = "INSERT INTO seletores (valor, nome, referencia) VALUES (:valor, :nome, :referencia)";

            $array = array(
                ':valor' => $seletor['seletor_valor'],
                ':nome' => strtoupper($seletor['seletor']),
                ':referencia' => $seletor['referencia']
            );

            if($sql->insere($query, $array)){
                exit("resultadoJson".json_encode(['status' => 'success', 'mensagem' => 'Seletor salvo com sucesso!']));
            }
            else{
                exit("resultadoJson".json_encode(['status' => 'error', 'mensagem' => 'Erro ao salvar seletor!']));
            }
        }

        public function excluirSeletor($seletor){
            $sql = new Database();
            $query = "DELETE FROM seletores WHERE id = :id";
            $array = array(
                ':id' => $seletor
            );

            if($sql->delete($query, $array)){
                exit("resultadoJson".json_encode(['status' => 'success', 'mensagem' => 'Seletor excluído com sucesso!']));
            }
            else{
                exit("resultadoJson".json_encode(['status' => 'error', 'mensagem' => 'Erro ao excluir seletor!']));
            }
        }

        // Método para salvar campos
        public function salvarCampo($campo){
            $sql = new Database();
            $query = "INSERT INTO campos (nome, fantasia, familia, tipo, visivel, editavel) VALUES (:nome, :fantasia, :familia, :tipo, :visivel, :editavel)";

            $array = array(
                ':nome' => $campo['nome'],
                ':fantasia' => strtoupper($campo['fantasia']),
                ':familia' => $campo['familia'],
                ':tipo' => $campo['tipo'],
                ':visivel' => $campo['visivel'],
                ':editavel' => $campo['editavel']
            );

            if($sql->insere($query, $array)){
                exit("resultadoJson".json_encode(['status' => 'success', 'mensagem' => 'Campo salvo com sucesso!']));
            }
            else{
                exit("resultadoJson".json_encode(['status' => 'error', 'mensagem' => 'Erro ao salvar campo!']));
            }
        }

        public function listarSeletores(){
            $sql = new Database();
            $query = "SELECT * FROM seletores";

            $result = $sql->select($query);
            return($result);
        }

        // Método para puxar as regras das filiais solicitadas
        public function selecionarFiliais($empresa1, $empresa2){
            $sql = new Database();
            $query = "SELECT * FROM empresas WHERE id = :id";

            $array = array(
                ':id' => $empresa1
            );
            $result = $sql->select($query, $array);
            $empresa1 = $result[0];

            $array = array(
                ':id' => $empresa2
            );
            $result = $sql->select($query, $array);
            $empresa2 = $result[0];

            exit("resultadoJson".json_encode(array('filial1' => $empresa1, 'filial2' => $empresa2)));
        }

        public function listarSeletoresCadastrados($referencia){
            $sql = new Database();
            $query = "SELECT * FROM seletores WHERE referencia = :referencia";

            $array = array(
                ':referencia' => $referencia
            );
            $result = $sql->select($query, $array);
            return($result);
        }

        public function listar($tabela){
            $sql = new Database();
            $query = "SELECT * FROM $tabela";

            $result = $sql->select($query);
            return($result);
        }

        public function listarCampos($referencia){
            $sql = new Database();
            $array = array(':referencia' => $referencia);
            $query = "SELECT * FROM campos WHERE familia = :referencia";
            $result = $sql->select($query, $array);

            return($result);
        }

        public function apagartudo(){
            $sql = new Database();
            $query = "DELETE FROM regras";
            $sql->delete($query);
        }


        public function cadastrar($table, $dados){
            $sql = new Database();
            $query = "INSERT INTO $table (";
            $campos = "";
            $valores = "";

            foreach($dados as $key => $value){
                $campos .= $key.", ";
                $valores .= ":".$key.", ";
            }

            $campos = substr($campos, 0, -2);
            $valores = substr($valores, 0, -2);
            
            $query .= $campos.") VALUES (".$valores.")";
            if($sql->insere($query, $dados)){
                exit("resultadoJson".json_encode(['status' => 'success', 'mensagem' => 'Registro salvo com sucesso!']));
            }
            else{
                exit("resultadoJson".json_encode(['status' => 'error', 'mensagem' => 'Erro ao salvar registro!']));
            }
        }

        public function deletar($table, $id){
            $sql = new Database();
            $query = "DELETE FROM $table WHERE id = :id";
            $array = array(
                ':id' => $id
            );

            if($sql->delete($query, $array)){
                exit("resultadoJson".json_encode(['status' => 'success', 'mensagem' => 'Campo excluído com sucesso!']));
            }
            else{
                exit("resultadoJson".json_encode(['status' => 'error', 'mensagem' => 'Erro ao excluir campo!']));
            }
        }

        public function editar($table, $id){
            $sql = new Database();
            $query = "SELECT * FROM $table WHERE id = :id";

            $array = array(
                ':id' => $id
            );

            if($result = $sql->select($query, $array)){
                exit("resultadoJson".json_encode($result));
            }
            else{
                exit("resultadoJson".json_encode(['status' => 'error', 'mensagem' => 'Erro ao tentar editar campo!']));
            }

        }

    }