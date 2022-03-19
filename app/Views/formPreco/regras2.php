<?php
// $conexao = mysqli_connect('localhost', 'root', '', 'lobegestao');
// mysqli_set_charset($conexao, 'utf8');

// if (!$conexao) {
//     echo "Erro ao se conectar com o banco de dados!";
// }

// $sql = "SELECT * FROM campos";
// $dados = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="en">




<body>
    <div class="">
        <div class="">

            <div id="etapa1" class="etapa1">
                <h1 class="frase">ESCOLHA O CAMPO</h1>

                <div class="campos">
                    <select name="categoria" id="categoria" class="item">
                        <option value=""></option>
                        <option value="entrada">Entrada</option>
                        <option value="saida">Saida</option>
                    </select>


                    <select disabled="disabled" class="disabled item" name="campo" id="campo" style="margin-top: 50px; opacity: 0; transition: 1s;">
                        <option value=""></option>
                    </select>


                    <div disabled="disabled" class="disabled item" name="valor" id="valor" style="margin-top: 50px; opacity: 0; transition: 1s;">

                    </div>

                    <button onclick="apagartudo()">Apagar todas as regras</button>

                

                    <img class="img-concluir" src="<?= DIST ?>img/seta.png" alt="" onclick="mudarTemplate()">

                </div>


            </div>
        </div>

        <div id="etapa2" class="etapa2 dropzone">
            <div>
                <nav>
                    <ul onclick="listarCamposSelecionados('empresa')">Empresa</ul>
                    <ul onclick="listarCamposSelecionados('painel')">Paine</ul>
                    <ul onclick="listarCamposSelecionados('controle')">Controle</ul>
                </nav>
            </div>
            <?php
            foreach ($dados as $key => $dado) {
            ?>
                <div id="<?= $key ?>Campos" style="display:none">
                    <?php
                    foreach ($dado as $campo) {
                        echo ("<div class='chave' draggable='true'>");
                        echo ("<h1 name='" . $key . "Campos' class='tipo" . $campo['tipo'] . "' id=" . $campo['nome'] . ">" . $campo['fantasia'] . "</h1>");
                        echo ("</div>");
                    }
                    ?>
                </div>
            <?php
            }
            ?>

            <div class="chave" draggable="true">
                <h1>A definir</h1>
            </div>

        </div>

        <div id="etapa3" class="etapa3">
            <div class="board">
                <h3>Regra</h3>
                <div class="dropzone">
                    <!-- AQUI SERA COLOCADOS OS PEDAÇOS DA REGRA -->

                </div>
            </div>
            <img class="img-concluir" src="http://10.3.6.152/LobeGestao/public/dist/img/seta.png" alt="" onclick="montarRegra()">
        </div>

        <dados class="empresa"></dados>

    </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

<!-- Small modal -->
<button type="button" id="btsm" class="btn btn-primary" style="display: none;" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div id="flutuante" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div id="flutuante-valor">

            </div>

        </div>
    </div>
</div>

</html>
<style>
    .direcao {
        display: flex;
        justify-content: space-between;
    }

    .direcao h1 {
        font-size: 16pt;
        background: red;
        border-radius: 10px;
        padding: 5px;
        margin: 10px;
        text-align: center;
    }

    body {
        position: relative;
        height: 100vh;
        background: #171c2291;
    }

    .etapa1 {
        width: 600px;
        height: 70vh;
        background: rgba(28, 66, 118, 1);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 10px;
        transition: 1s;
    }

    .etapa2 {
        opacity: 0;
        border-radius: 10px;
        position: absolute;
        transform: translate(0%, -80%);
        background-color: rgba(28, 66, 118, 1);
        z-index: 111;
        top: 30%;
        left: 98%;
        height: 1%;
        width: 1%;
        transition: 1s;
        display: block;
    }

    .etapa3 {
        opacity: 0;
        border-radius: 10px;
        position: absolute;
        transform: translate(0%, -80%);
        background-color: rgba(28, 66, 118, 1);
        z-index: 111;
        top: 75%;
        left: 98%;
        height: 1%;
        width: 1%;
        transition: 1s;
    }

    h1.frase {
        text-align: center;
        padding: 15px;
        width: 50%;
        margin: auto;
        font-family: -webkit-pictograph;
        margin-top: 10px;
        color: #467aef;
    }

    select,
    input {
        padding: 20px;
        margin: 15px 0;
        width: 100%;
        font-size: 30pt;
        text-align: center;
        background: none;
        border: none;
        border-bottom: solid 1px #467aef;
    }

    .campos {
        width: 50%;
        margin: auto;
    }

    select:hover,
    select:focus,
    select:checked {
        color: #467aef;
    }

    /*toggle*/
    input[type="checkbox"] {
        position: relative;
        width: 80px;
        height: 40px;
        -webkit-appearance: none;
        background-image: url('<?= DIST ?>img/toogle.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        box-shadow: inset 0 0 5px #3f48cc;
        border-radius: 20px;
        transition: all 0.5s ease;
    }

    input[type="checkbox"]:before {
        content: "";
        position: absolute;
        width: 40px;
        height: 40px;
        background: #3f48cc;
        border-radius: 50%;
        top: 0;
        left: 0;
        box-shadow: 0 0 2px #3f48cc;
        transition: all 0.5s;
        transform: scale(1.1);
    }

    input[type="checkbox"]:checked:before {
        left: 40px;
    }

    img.img-concluir {
        width: 50px;
        right: 20px;
        position: absolute;
        bottom: 20px;
    }

    .board {
        height: 100%;
    }

    .dropzone {
        height: 80%;
    }

    .chave>h1 {
        color: #467aef;
        font-size: 20px;
        margin: 5px;
        float: left;
        border: solid 1px #467aef;
        padding: 5px;
        border-radius: 10px;
    }

    input.identificacao {
        width: 31%;
    }

    ul {
        float: left;
        width: 33.3%;
        padding: 10px;
        text-align: center;
        border: solid 1px #467aef;
    }

    nav {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
</style>

<script>
    chaves = ''
    dropzones = ''
    var campoCondicao = ''
    var valorCondicao = ''
    var condicao = ''

    window.onload = () => {
        document.querySelectorAll('.campos>.item').forEach(function(select) {
            select.addEventListener('change', function() {
                setTimeout(function() {
                    select.disabled = true
                }, 200)
                html = trazerConteudo(this.value);
                selectRetornado = document.querySelector('.campos>.disabled')
                if (selectRetornado != null) {
                    selectRetornado.removeAttribute('disabled')
                    selectRetornado.classList.remove('disabled')
                    selectRetornado.style.opacity = 1
                    selectRetornado.style.marginTop = '0'
                    selectRetornado.innerHTML = html
                } else {
                    valorTp()
                }
            })
        });

    }

    function valorTp() {
        input = document.getElementById('valorTp')
        if (document.querySelector('#check').checked) {
            input.classList.add('porcentagem')
            input.classList.remove('real')
        } else {
            input.classList.add('real')
            input.classList.remove('porcentagem')
        }
        $('.porcentagem').mask('#.##0,00%', {
            reverse: true
        });
        $('.real').mask('#.##0,00', {
            reverse: true
        });
    }


    function trazerConteudo(valor) {
        Entradas = ['operacao', 'valor', 'redutor', 'repasse', 'desconto', 'despesas', 'pis-cofins-importacao', 'pis-cofins-credito', 'ipi', 'ii', 'frete', 'credito-icms', 'difal-entrada', 'icms-st', 'preco-da-compra', 'preco-de-custo']
        Saida = ['operacao', 'icms_saida', 'difal_fecp_saida', 'icms_st_efetivo', 'imposto_federais', 'desconto_concedido', 'pis_cofins_debito', 'ipi', 'taxa', 'comissao', 'frete', 'custo_fixo', 'margem_calculada', 'preco_venda_informado', 'lucro_projetado', 'carga_tributario']

        var html = ''
        console.log(valor)
        if (valor == 'entrada') {
            Entradas.forEach(function(item) {
                console.log(item)
                html += `<option value="${item}">${item}</option>`
            })
        } else if (valor == 'saida') {
            html = ''
            Saida.forEach(function(item) {
                html += `<option value="${item}">${item}</option>`
            })
        } else {
            html = '<div class="center chave"><input type="checkbox" onchange="valorTp()" name="" id="check"></div><input id="valorTp" type="text" class="real" placeholder="Valor à assumir">'
        }
        return html
    }

    function mudarTemplate() {
        etapa1 = document.querySelector('#etapa1')
        etapa2 = document.querySelector('#etapa2')
        etapa3 = document.querySelector('#etapa3')
        // etapa1 = document.querySelector('.etapa1')
        etapa1.setAttribute("style", "width:40%;left:25%;height:80vh;");
        etapa2.setAttribute("style", "top: 50%;left: 46%;height: 50%;width: 50%;opacity: 1;");
        etapa3.setAttribute("style", "top: 84%;left: 46%;height: 28%;width: 50%;opacity: 1;");

        chaves = document.querySelectorAll('.chave');
        dropzones = document.querySelectorAll('.dropzone');

        chaves.forEach((chave) => {
            chave.addEventListener('dragstart', dragstart);
            chave.addEventListener('dragend', dragEnd);
            chave.addEventListener('drag', drag);
        });

        dropzones.forEach((dropzone) => {
            dropzone.addEventListener('dragover', dragover);
            dropzone.addEventListener('dragenter', dragenter);
            dropzone.addEventListener('dragleave', dragleave);
            dropzone.addEventListener('drop', drop);
        });
    }

    // chaves 



    function dragstart() {
        //this = chave
        dropzones.forEach((dropzone) => {
            dropzone.classList.add('highlight');
        });

        this.classList.add('is-dragging');
    }

    function dragEnd() {
        //this = chave
        dropzones.forEach((dropzone) => {
            dropzone.classList.remove('highlight');
        });

        clone = this.cloneNode(true);
        clone.removeAttribute('draggable');
        document.getElementById('etapa3').querySelector('.dropzone').appendChild(clone);

        this.classList.remove('is-dragging');
        reacao(this)
    }

    function drag() {
        // console.log('chave drag');
    }

    // dropzones

    function dragover() {
        //this = dropzone
        this.classList.add('over');

        const chaveBeingDragged = document.querySelector('.is-dragging');
        divAlvo = chaveBeingDragged.getAttribute('name')

        // document.getElementById('etapa2').getElementById(divAlvo).appendChild(chaveBeingDragged);
        document.getElementById('etapa2').appendChild(chaveBeingDragged);
    }

    function dragenter() {
        //this = dropzone
    }

    function dragleave() {
        //this = dropzone
        this.classList.remove('over');
    }

    function drop() {
        console.log('dropzone drop');
    }

    //função que abre um modal para inserir o valor da chave
    function reacao(chave) {
        var html = '';
        campoCondicao = chave.querySelector('h1').id + '.value'
        //Se tipo 2, listar seletores
        if (chave.querySelector('h1').classList.contains('tipo2')) {
            chaveAux = chave.querySelector('h1').id
            $.ajax({
                url: url + 'formPreco/listarSeletoresCadastrados',
                type: 'POST',
                data: {
                    referencia: chaveAux
                },
                success: function(data) {
                    data = data.split('</div>')[1];
                    data = JSON.parse(data);
                    for (var i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].valor + '">' + data[i].nome + '</option>';
                    }
                    console.log(html)
                }
            })
            console.log(html)
            //abiri modal
            setTimeout(() => {
                document.getElementById('flutuante-valor').innerHTML = '<select onchange="criarCondicao(this.value)" class="item"><option value="">Selecione</option>' + html + '</select>'
            }, 500)
        }
        //Se tipo 1, abrir input de valores
        else {
            if (chave.querySelector('h1').classList.contains('tipo1')) {
                document.getElementById('flutuante-valor').innerHTML = `
                <input type="text" id="condicional" class="porcentagem" placeholder="Valor">
                
                <input type="button" onclick="criarCondicao(this.value)" class="identificacao" value=">">
                <input type="button" onclick="criarCondicao(this.value)" class="identificacao" value="<">
                <input type="button" onclick="criarCondicao(this.value)" class="identificacao" value="=">
                `
            }
            //Se tipo 4, puxar estados
            else if (chave.querySelector('h1').classList.contains('tipo4')) {
                $.ajax({
                    url: url+'formPreco/listarEstados',
                    success: function(data) {
                        html = data.split('estadosListados')[1];                        
                    }
                })
                //abiri modal
                setTimeout(() => {
                    document.getElementById('flutuante-valor').innerHTML = '<select onchange="criarCondicao(this.value)" class="item"><option value="">Selecione</option>' + html + '</select>'
                }, 500)
            }
        }
        $('.real').mask('#.##0,00', {
            reverse: true
        });
        $('.porcentagem').mask('#.##0,00%', {
            reverse: true
        });
        document.getElementById('btsm').click()
    }

    //Função para criar condição
    function criarCondicao(valor) {
        console.log(valor)
        //pegar variavel global
        //pegar ultimo caractere da variavel condicao
        ultimocaractere = condicao.substr(condicao.length - 1);
        //adicionar o valor ao final da variavel

        if (condicao.length > 0 && condicao.substr(condicao.length - 2) != '|') {
            condicao += " && "
        }
        if (valor.length > 1) {
            condicao += campoCondicao + " == '" + valor + "'"
        } else {
            val = document.getElementById("condicional").value
            val = val.replaceAll('%', '')
            val = val.replaceAll('.', '')
            val = val.replaceAll(',', '.')
            if (valor == '=') {
                valor = '=='
            }
            //CampoCondição => campo vindo do banco com .value e passado para o padrão do arquivo regras.php com _v no lugar de .value
            campoCondicao = campoCondicao.replaceAll('.value', '_v')
            condicao += campoCondicao + " " + valor + " " + val
        }
        console.log("CampoCondicao: " + campoCondicao + "\nCondicao: " + condicao)
        document.getElementById('flutuante').click()
        criterios++;
    }

    function montarRegra() {
        categoria = document.getElementById('categoria').value
        campo = document.getElementById('campo').value

        valor = document.getElementById('valorTp').value
        // valor = valor.replaceAll('%', '')
        // valor = valor.replaceAll('.', '')
        // valor = valor.replaceAll(',', '.')

        // if (campo == 'operacao') {
        //     campo += '_' + categoria.substr(0, 4)
        // }

        //Verificar se é real ou porcentagem
        if (document.getElementById('check').checked) {

        }
        //Condição, campo.value => campo em html, valor => valor do campo
        regra = "if(" + condicao + "){" + campo + ".value = '" + valor + "';}"
        regra = regra.replaceAll('_entr', '')
        regra = regra.replaceAll('_said', '')
        salvarRegra(regra, campo, criterios)
    }

    function salvarRegra(regra, campoAlvo, criterios) {
        $.ajax({
            url: url + "formPreco/salvarGeral",
            type: "POST",
            data: {
                regra: regra,
                campoAlvo: campoAlvo,
                criterios: criterios
            },
            success: function(data) {
                console.log(data);
                window.location.reload();
            }
        })
    }
</script>