<?php

    class Estado{
            
        public function listarEstados(){
            $estados = array(
                'AC' => 'Acre',
                'AL' => 'Alagoas',
                'AP' => 'Amapá',
                'AM' => 'Amazonas',
                'BA' => 'Bahia',
                'CE' => 'Ceará',
                'DF' => 'Distrito Federal',
                'ES' => 'Espírito Santo',
                'GO' => 'Goiás',
                'MA' => 'Maranhão',
                'MT' => 'Mato Grosso',
                'MS' => 'Mato Grosso do Sul',
                'MG' => 'Minas Gerais',
                'PA' => 'Pará',
                'PB' => 'Paraíba',
                'PR' => 'Paraná',
                'PE' => 'Pernambuco',
                'PI' => 'Piauí',
                'RJ' => 'Rio de Janeiro',
                'RN' => 'Rio Grande do Norte',
                'RS' => 'Rio Grande do Sul',
                'RO' => 'Rondônia',
                'RR' => 'Roraima',
                'SC' => 'Santa Catarina',
                'SP' => 'São Paulo',
                'SE' => 'Sergipe',
                'TO' => 'Tocantins'
            );
            $options = "";
            foreach($estados as $sigla => $nome){
                $options .= "<option value='{$sigla}'>{$sigla}</option>";
            }
            return $options;
        }

        public function listarAliquotas(){
            $sql = new Database();

            // Verificar se já foi puxado as aliquotas do banco
            if(isset($_SESSION['aux']['nome']) && !empty($_SESSION['aux']['nome'])){
                if($_SESSION['aux']['nome'] == 'estados'){
                    
                }else{
                    $_SESSION['aux']['nome'] = 'estados';
                    $_SESSION['aux']['dados'] = $sql->select("SELECT * FROM alq_uf");
                }
            }else{
                $_SESSION['aux']['nome'] = 'estados';
                $_SESSION['aux']['dados'] = $sql->select("SELECT * FROM alq_uf");
            }
            return $_SESSION['aux']['dados'];


        }
    }