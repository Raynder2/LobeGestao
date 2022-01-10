<?php
if(isset($_POST['cnpj']) && !empty($_POST['cnpj'])){
    $cnpjj = $_POST['cnpj'];
}
else
if(isset($_GET['cnpj']) && !empty($_GET['cnpj'])){
    $cnpjj = $_GET['cnpj'];
}
else{
    exit('Nenhum CNPJ valido informado');
}

$cnpjs = explode(";",$cnpjj);

foreach($cnpjs as $cnpj){
    $cnpj = str_replace(".", "", $cnpj);
    $cnpj = str_replace("-", "", $cnpj);
    $cnpj = str_replace("/", "", $cnpj);
    $cnpj = str_replace(" ", "", $cnpj);

    $days = 10;
    //Inicia o cURL
    $url = "https://receitaws.com.br/v1/cnpj/$cnpj/days/$days";
    $ch = curl_init($url);
    $token = "c8a401fb6ecf04f9a3d331b1cf6a49ed08caec3e76ca1cdf0a12ebdb7c604dcb";

    //Pede o que retorne o resultado como string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // TOKEN 
    $authorization = "Authorization: Bearer $token";
    curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type: application/json' , $authorization ));
    
    //Ignora certificado SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

    //Manda executar a requisição
    $data = curl_exec($ch);

    //Fecha a conexão para economizar recursos do servidor
    curl_close($ch);

    //Retorna o resultado da requisição

    $nome = explode('"nome":"',$data)[1];
    $nome = explode('"',$nome)[0];

    $atv = explode('"atividades_secundarias":[',$data)[1];
    $atv = explode('],',$atv)[0];

    $atv2 = explode('"atividade_principal":[',$data)[1];
    $atv2 = explode('],',$atv2)[0];

    $situ = explode('"situacao":"',$data)[1];
    $situ = explode('","',$situ)[0];

    $natureza = explode('"natureza_juridica":',$data)[1];
    $natureza = explode('","',$natureza)[0];

    $atv = $atv." ".$atv2;
    $res = "";

    if($situ == "BAIXADA"){
		$res = '<td><b>BAIXADA</b></td>';
    }
    else{
        $res = '<td><b> </b></td>';
    }

    $html = '';
    $html .= '<tr>';
    $html .= '<td><b>'.$cnpj.'</b></td>';
    $html .= '<td><b>'.$nome.'</b></td>';

    $orgao_natu = ["Órgão Público","orgão Publico","Autarquia","Fundações","Fundacoes"];
    $orgao_nome = ["MUNIC","FUNDO","munic","fundo"];
    $hospital = ["médic","ambulatori","cirúrgicos","hospitalares","pronto-socorro","diálise"];

    
    if(count(explode("Órgão Público",$natureza)) > 1 || count(explode("orgão Publico",$natureza)) > 1 || count(explode("Autarquia",$natureza)) > 1 || count(explode("Fundações",$natureza)) > 1 || count(explode("Fundacoes",$natureza)) > 1  || count(explode("MUNIC",$nome)) > 1 || count(explode("FUNDO",$nome)) > 1 || count(explode("munic",$nome)) > 1 || count(explode("fundo",$nome)) > 1){
        $html .= '<td><b>NÃO</b></td>';
        $html .= '<td><b>NÃO</b></td>';
        $html .= '<td><b>SIM</b></td>';
        $html .= '<td><b>NÃO</b></td>';
        
    }
    else{
        if(count(explode("Comércio",$atv)) > 1){
            $html .= '<td><b>SIM</b></td>';
            $html .= '<td><b>NÃO</b></td>';
            $html .= '<td><b>NÃO</b></td>';
            $html .= '<td><b>NÃO</b></td>';
        }
        else{
            if(count(explode("médic",$atv)) > 1 || count(explode("ambulatori",$atv)) > 1 || count(explode("cirúrgicos",$atv)) > 1 || count(explode("hospitalares",$atv)) > 1 || count(explode("pronto-socorro",$atv)) > 1 || count(explode("diálise",$atv)) > 1){
                $html .= '<td><b>NÃO</b></td>';
                $html .= '<td><b>SIM</b></td>';
                $html .= '<td><b>NÃO</b></td>';
                $html .= '<td><b>NÃO</b></td>';
            }
            else{
                if(count(explode("Cultiv",$atv)) > 1 || count(explode("produção",$atv)) > 1 || count(explode("sementes",$atv)) > 1 || count(explode("agricult",$atv)) > 1 || count(explode("agropecuária",$atv)) > 1 || count(explode("agropecuaria",$atv)) > 1){
                    $html .= '<td><b>NÃO</b></td>';
                    $html .= '<td><b>NÃO</b></td>';
                    $html .= '<td><b>NÃO</b></td>';
                    $html .= '<td><b>SIM</b></td>';
                }
                else{
                    $html .= '<td><b>NÂO ENCONTRADO</b></td>';
                    $html .= '<td><b>NÂO ENCONTRADO</b></td>';
                    $html .= '<td><b>NÂO ENCONTRADO</b></td>';
                    $html .= '<td><b>NÂO ENCONTRADO</b></td>';
                }
            }
        }
        
    }

	$html .= $res;
	$html .= '</tr>';

    echo($html);

    echo("<br>");
}