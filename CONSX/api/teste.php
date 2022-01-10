<?php
        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://www10.goiania.go.gov.br/TransWeb/FuncionariosRemuneracaoPopUp.aspx?InMatricula=143186&InContrato=1");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $data = curl_exec($ch);

        print_r($data);

        // close curl resource to free up system resources
        curl_close($ch);     
?>