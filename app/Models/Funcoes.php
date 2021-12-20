<?php

    class Funcoes{
        public function maior($var, $condicional){
            if($var > $condicional){
                return true;
            }
            else{
                return false;
            }
        }

        public function menor($var, $condicional){
            if($var < $condicional){
                return true;
            }
            else{
                return false;
            }
        }

        public function igual($var, $condicional){
            if($var == $condicional){
                return true;
            }
            else{
                return false;
            }
        }

        public function diferente($var, $condicional){
            if($var != $condicional){
                return true;
            }
            else{
                return false;
            }
        }

        public function maiorIgual($var, $condicional){
            if($var >= $condicional){
                return true;
            }
            else{
                return false;
            }
        }

        public function menorIgual($var, $condicional){
            if($var <= $condicional){
                return true;
            }
            else{
                return false;
            }
        }

        public function contem($var, $condicional){
            if(in_array($var, $condicional)){
                return true;
            }
            else{
                return false;
            }
        }

        public function naoContem($var, $condicional){
            if(!in_array($var, $condicional)){
                return true;
            }
            else{
                return false;
            }
        }


    }