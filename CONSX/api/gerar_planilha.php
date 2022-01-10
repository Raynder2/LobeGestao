<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
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
		
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'resultadoDaBusca.xls';
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">CNPJs consultados</td>';
		$html .= '</tr>';
		
		$html .= '<tr>';
		$html .= '<td><b>CNPJ</b></td>';
		$html .= '<td><b>EMPRESA</b></td>';
		$html .= '<td><b>CONTRIUINTE</b></td>';
		$html .= '<td><b>HOSPITAL</b></td>';
		$html .= '<td><b>ÓRGÃO  PUBLICO</b></td>';
		$html .= '<td><b>PRODUTOR RUAL</b></td>';
		$html .= '<td><b>OBS</b></td>';
		$html .= '</tr>';
		
		$html .= $cnpjj;
		
		$html .= '</table>';
		
		// Configurações header para forçar o download
		header ("Expires: Mon, 07 Jul 2016 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit;?>
	</body>
</html>