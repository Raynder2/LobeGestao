<?php

    $sql = "CREATE TABLE `lobegestao`.`alq_uf` ( `id` INT NOT NULL AUTO_INCREMENT ,`origem` VARCHAR(2) NOT NULL , `AC` FLOAT NOT NULL , `AL` FLOAT NOT NULL , `AP` FLOAT NOT NULL , `AM` FLOAT NOT NULL , `BA` FLOAT NOT NULL , `CE` FLOAT NOT NULL , `DF` FLOAT NOT NULL , `ES` FLOAT NOT NULL , `GO` FLOAT NOT NULL , `MA` FLOAT NOT NULL , `MT` FLOAT NOT NULL , `MS` FLOAT NOT NULL , `MG` FLOAT NOT NULL , `PR` FLOAT NOT NULL , `PB` FLOAT NOT NULL , `PA` FLOAT NOT NULL , `PE` FLOAT NOT NULL , `PI` FLOAT NOT NULL , `RN` FLOAT NOT NULL , `RS` FLOAT NOT NULL , `RJ` FLOAT NOT NULL , `RO` FLOAT NOT NULL , `RR` FLOAT NOT NULL , `SC` FLOAT NOT NULL , `SE` FLOAT NOT NULL , `SP` FLOAT NOT NULL , `TO` FLOAT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    ";

    $sql .= "CREATE TABLE `lobegestao`.`empresas` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(32) NOT NULL , `tipo` VARCHAR(15) NOT NULL , `uf` VARCHAR(2) NOT NULL , `regime` VARCHAR(15) NOT NULL , `faturamento` VARCHAR(15) NOT NULL , `tareto` VARCHAR(3) NOT NULL , `tarego` VARCHAR(3) NOT NULL , `lei` VARCHAR(3) NOT NULL , `taregomex` VARCHAR(3) NOT NULL , `credita` VARCHAR(3) NOT NULL , `id_user` INT(5) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $sql .= "CREATE TABLE `lobegestao`.`usuarios` ( `id` INT NOT NULL AUTO_INCREMENT , `cnpj` VARCHAR(32) NOT NULL , `nome` VARCHAR(32) NOT NULL , `email` VARCHAR(64) NOT NULL , `senha` VARCHAR(32) NOT NULL , `status` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $sql .= "CREATE TABLE `lobegestao`.`regras` ( `id` INT NOT NULL AUTO_INCREMENT , `regra` VARCHAR(256) NOT NULL , `objeto` VARCHAR(32) NOT NULL , `ordem` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $resul = mysql_multi_query($sql);

    if($resul){
        echo("banco criado!");
    }
    else{
        echo("Erro");
    }
    