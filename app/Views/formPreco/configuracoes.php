<?php
if(isset($dados['empresa']) && !empty($dados['empresa'])){
    $resposta = $dados['empresa'];
    if(isset($resposta['selecao']) && !empty($resposta['selecao'])){
        



    }
    else if(isset($resposta['status']) && !empty($resposta['status'])){
        if($resposta['status'] == 'sucesso'){
            echo("<script>swal.fire('".$resposta['mensagem']."','','success');</script>");
        }
        else{
            echo("<script>swal.fire('".$resposta['mensagem']."','','error');</script>");
        }
    }
}
?>
<div class="background">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 tela">
                <div class="button" onclick="window.location.href = '<?=URL?>formPreco/configuracoes/aliquotas'">
                    <p>Aliquota Interestadual</p>   
                </div>

                <hr>
                
                <div class="button" onclick="window.location.href = '<?=URL?>formPreco/configuracoes/seletores'">
                    <p>Seletores</p>   
                </div>
            </div>


            <div class="col-md-4 opcoes">
                <!-- Titulo -->
                <div class="titulo">
                    <h4>Configurador</h4>
                </div>

                <!-- Formulario -->
                <?php
                    $configurador = new Configuradores();
                    if(isset($dados['configurador']) && !empty($dados['configurador'])){
                        $metodo = $dados['configurador'];
                        $configurador->$metodo($dados);
                    }
                ?>
                
                
            </div>
        </div>
    </div>
</div>

<style>
    .background{
        background-color: #fff;
        min-height: 100vh;
        position: absolute; 
        width: 100%;
    }
    .opcoes{
        position: fixed;
        right: 0;
        height: 100vh;
        color: #a0a0d1;
        font-size: 16pt;
    }
    .titulo{
        text-align: center;
        padding: 10px;
    }
    .tela{
        min-height: 100vh;
        border-right: 1px dashed #a0a0d1;
        background-color: #eaeff5;
    }

    /* ESTILOS DOS BOTÕES */
        .button{
            border-radius: 10px;
            font-size: 16pt;
            height: 50px;
            margin-top: 10px;
            text-align: center;
            width: 80%;
            position: relative;
            left: 50%;
            transform: translate(-50%);
        }
        .button > p{
            color: #6363cc;
            top: 50%;
            position: relative;
            transform: translateY(-50%);
        }
        .tela > .button{
            background-color: #fff;
            border: 1px solid #a0a0d1;
            color: #a0a0d1;
        }
        .tela > button > p{
            color: #a0a0d1;
        }
        .opcoes > .button > p{
            color: #fff;
        }
        .opcoes > .button{
            background-color: #a0a0d1;
            border: 1px solid #fff;
            color: #fff;
        }
    /* FIM DOS ESTILOS DOS BOTÕES */
    
    form > select {
        width: 20%;
    }
    input#alq {
        width: 33px;
    }
</style>

<script>
    var aliquotas = <?php echo json_encode($dados['aliquotas']); ?>;
    function calcular_aliquota(){
        var origem = document.getElementById('origem');
        var destino = document.getElementById('destino');
        ori = origem.value;
        des = destino.value;

        for(var i=0; i<aliquotas.length; i++) {
            if(aliquotas[i].origem === ori) {
                aliquota = aliquotas[i][des]
            }
        }
        if(ori != 'UF' && des != 'UF'){
            document.getElementById('alq').value = aliquota;
        }

    }

    function alterar_aliquota(){
        var origem = document.getElementById('origem');
        var destino = document.getElementById('destino');
        var alq = document.getElementById('alq');
        ori = origem.value;
        des = destino.value;
        aliquota = alq.value;

        console.log(ori, des, aliquota);

        if(ori != 'UF' && des != 'UF'){
            $.ajax({
                url: '<?=URL?>formPreco/alterarAliquotas',
                type: 'POST',
                data: {
                    'origem': ori,
                    'destino': des,
                    'aliquota': aliquota
                },
                success: function(data){
                    resposta = JSON.parse(data.split("resultadoJson")[1]);
                    
                    swal.fire(resposta.mensagem, '', resposta.status);
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    }
    function cadastrar_seletor(){
        /*Pego um select e sua referencia
        Atribuo um nome para o novo option
        Transformo em um valor para o name, sem acentos e sem espaços*/

        referencia = document.getElementById('referencia').value;
        seletor = document.getElementById('seletor').value;
        seletor_valor = seletor.replace(" ", "-");
        seletor_valor = seletor_valor.toLowerCase();
        seletor_valor = remover_acentos(seletor_valor);
        
        if(seletor != '' && seletor_valor != ''){ //Verifica se o seletor está vazio
            $.ajax({ //Envia o seletor para o banco
                url: '<?=URL?>formPreco/salvarGeral',
                type: 'POST',
                data: {
                    'referencia': referencia,
                    'seletor': seletor,
                    'seletor_valor': seletor_valor
                },
                success: function(data){
                    resposta = JSON.parse(data.split("resultadoJson")[1]);
                    
                    swal.fire(resposta.mensagem, '', resposta.status);
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    }
    function remover_acentos(str) {
        return str.normalize("NFD").replace(/[^a-zA-Zs-]/g, "");
    }
</script>