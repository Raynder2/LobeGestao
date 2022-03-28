<?php
if (isset($dados['empresa']) && !empty($dados['empresa'])) {
    $resposta = $dados['empresa'];
    if (isset($resposta['selecao']) && !empty($resposta['selecao'])) {
    } else if (isset($resposta['status']) && !empty($resposta['status'])) {
        if ($resposta['status'] == 'sucesso') {
            echo ("<script>swal.fire('" . $resposta['mensagem'] . "','','success');</script>");
        } else {
            echo ("<script>swal.fire('" . $resposta['mensagem'] . "','','error');</script>");
        }
    }
}

if (isset($dados['seletores']) && !empty($dados['seletores'])) {
    $array_seletores = array();
    /*Vamos percorrer o array e verificar qual a referencia atual e criar um array de arrays por referencia
          Como temos que criar o primeiro elemento do array antes de começar a ultilizar o array_push
          Colocamos um valor para a posição 0 conforme linha 31 e assim que a referencia mudar linha 27-29 vamos remover a posição 0*/

    foreach ($dados['seletores'] as $seletor) {
        if (isset($nomeseletor) && !empty($nomeseletor) && $nomeseletor != $seletor['referencia']) {
            array_shift($array_seletores[$nomeseletor]);
        }
        $nomeseletor = $seletor['referencia'];
        $array_seletores[$nomeseletor][0] = $seletor;
        array_push($array_seletores[$nomeseletor], $seletor);
    }
    array_shift($array_seletores[$nomeseletor]);
}
?>
<div class="conteudo-central">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                    <form action="">
                        <!-- inicio do formulario -->

                        <div class="col-md-4 colunas-pai">
                            <!-- Primeira coluna -->
                            <div class="table-responsive entradas">

                                <div class="coluna_entradas entrada_um col-md-6 colunas-pai" style="padding: 1px;">
                                    <!-- Primeira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo"><span class="fornecedortext">UF</span> - > <span class="empresa1text">UF</span></p> <!-- Titulo da coluna interna-->

                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="operacao campoTabela" id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao'] -->
                                            <?php
                                            foreach ($array_seletores['operacao_entr'] as $operacao) {
                                                echo ("<option value='" . $operacao['valor'] . "'>" . $operacao['nome'] . "</option>");
                                            }
                                            ?>
                                        </select>

                                        <div class="caixa-campo-texto"><label for="valor">Preço do Produto</label>
                                            <input id="precodoproduto" type="text" name="precodoproduto" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <?php
                                        foreach ($dados['campos'] as $campo) {
                                            echo ("<div class='caixa-campo-texto'><label for='" . $campo['nome'] . "'>" . ucfirst($campo['nome']) . "</label>");
                                            echo ("<input id='" . $campo['nome'] . "' type='text' name='" . $campo['nome'] . "' class='campoTabela valor " . $campo['tipo_campo'] . "' efeito='" . $campo['efeito'] . "' value='0,00'></div>");
                                        }
                                        ?>

                                        <div class="caixa-campo-texto"><label for="preco-da-compra">Preço da Compra</label>
                                            <input id="preco-da-compra" type="text" name="preco-da-compra" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="preco-de-custo">Preço de Custo</label>
                                            <input id="preco-de-custo" type="text" name="preco-de-custo" class="campoTabela valor real" value="0,00">
                                        </div>

                                    </div>
                                </div>

                                <div class="coluna_entradas entrada_dois col-md-6 colunas-pai" style="padding: 1px;">
                                    <!-- Segunda coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo"><span class="fornecedortext">UF</span> -> <span class="empresa2text">UF</span></p> <!-- Titulo da coluna interna-->
                                        <select name="operacao" class="campoTabela operacao" id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao'] -->
                                            <?php
                                            foreach ($array_seletores['operacao_entr'] as $operacao) {
                                                echo ("<option value='" . $operacao['valor'] . "'>" . $operacao['nome'] . "</option>");
                                            }
                                            ?>
                                        </select>

                                        <div class="caixa-campo-texto"><label for="valor">Preço do Produto</label>
                                            <input id="precodoproduto" type="text" name="precodoproduto" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <?php
                                        foreach ($dados['campos'] as $campo) {
                                            echo ("<div class='caixa-campo-texto'><label for='" . $campo['nome'] . "'>" . ucfirst($campo['nome']) . "</label>");
                                            echo ("<input id='" . $campo['nome'] . "' type='text' name='" . $campo['nome'] . "' class='campoTabela valor " . $campo['tipo_campo'] . "' efeito='" . $campo['efeito'] . "' value='0,00'></div>");
                                        }
                                        ?>

                                        <div class="caixa-campo-texto"><label for="preco-da-compra">Preço da Compra</label>
                                            <input id="preco-da-compra" type="text" name="preco-da-compra" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="preco-de-custo">Preço de Custo</label>
                                            <input id="preco-de-custo" type="text" name="preco-de-custo" class="campoTabela valor real" value="0,00">
                                        </div>
                                        

                                    </div>
                                </div>


                            </div>


                        </div>

                        <div class="col-md-8 colunas-pai">
                            <!-- Segunda coluna -->
                            <div class="table-responsive entradas">

                                <div class="coluna_saidas saida_um col-md-4 colunas-pai" style="padding: 1px;">
                                    <!-- Primeira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo"> <span class="empresa1text">UF</span> -> <span class="clientetext">UF</span></p> <!-- Titulo da coluna interna-->

                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="campoTabela operacao" id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao_said'] -->
                                            <?php
                                            foreach ($array_seletores['operacao_said'] as $operacao) {
                                                echo ("<option value='" . $operacao['valor'] . "'>" . $operacao['nome'] . "</option>");
                                            }
                                            ?>
                                        </select>

                                        <div class="caixa-campo-texto"><label for="icms-saida">ICMS Saida</label>
                                            <input id="icms-saida" type="text" name="icms-saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                            <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                            <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="impostos-federais">Impostos Federais</label>
                                            <input id="impostos-federais" type="text" name="impostos-federais" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="desconto-concedido">Desconto Concedido</label>
                                            <input id="desconto-concedido" type="text" name="desconto-concedido" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                            <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="ipi_saida">IPI</label>
                                            <input id="ipi_saida" type="text" name="ipi_saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="taxa-de-desconto">Taxa</label>
                                            <input id="taxa" type="text" name="taxa" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="comissao">Comissão</label>
                                            <input id="comissao" type="text" name="comissao" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="frete_saida">Frete</label>
                                            <input id="frete_saida" type="text" name="frete_saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="custo-fixo">Custo Fixo</label>
                                            <input id="custo-fixo" type="text" name="custo-fixo" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="margem-calculada">Margem Calculada</label>
                                            <input id="margem-calculada" type="text" name="margem-calculada" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="preco-venda-informado">Preço Venda Informado</label>
                                            <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="lucro-projetado">Lucro Projetado</label>
                                            <input id="lucro-projetado" type="text" name="lucro-projetado" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="carga-tributaria">Carga Tributária</label>
                                            <input id="carga-tributaria" type="text" name="carga-tributaria" class="campoTabela valor porcentagem" value="0,00">
                                        </div>




                                    </div>
                                </div>

                                <div class="coluna_saidas saida_dois col-md-4 colunas-pai" style="padding: 1px;">
                                    <!-- Segunda coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo"> <span class="empresa2text">UF</span> -> <span class="clientetext">UF</span></p> <!-- Titulo da coluna interna-->

                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="campoTabela operacao" id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao_said'] -->
                                            <?php
                                            foreach ($array_seletores['operacao_said'] as $operacao) {
                                                echo ("<option value='" . $operacao['valor'] . "'>" . $operacao['nome'] . "</option>");
                                            }
                                            ?>
                                        </select>

                                        <div class="caixa-campo-texto"><label for="icms-saida">ICMS Saida</label>
                                            <input id="icms-saida" type="text" name="icms-saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                            <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                            <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="impostos-federais">Impostos Federais</label>
                                            <input id="impostos-federais" type="text" name="impostos-federais" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="desconto-concedido">Desconto Concedido</label>
                                            <input id="desconto-concedido" type="text" name="desconto-concedido" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                            <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="ipi_saida">IPI</label>
                                            <input id="ipi_saida" type="text" name="ipi_saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="taxa-de-desconto">Taxa</label>
                                            <input id="taxa" type="text" name="taxa" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="comissao">Comissão</label>
                                            <input id="comissao" type="text" name="comissao" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="frete_saida">Frete</label>
                                            <input id="frete_saida" type="text" name="frete_saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="custo-fixo">Custo Fixo</label>
                                            <input id="custo-fixo" type="text" name="custo-fixo" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="margem-calculada">Margem Calculada</label>
                                            <input id="margem-calculada" type="text" name="margem-calculada" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="preco-venda-informado">Preço Venda Informado</label>
                                            <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="lucro-projetado">Lucro Projetado</label>
                                            <input id="lucro-projetado" type="text" name="lucro-projetado" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="carga-tributaria">Carga Tributária</label>
                                            <input id="carga-tributaria" type="text" name="carga-tributaria" class="campoTabela valor porcentagem" value="0,00">
                                        </div>




                                    </div>
                                </div>

                                <div class="coluna_saidas saida_tres col-md-4 colunas-pai" style="padding: 1px;">
                                    <!-- Terceira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo">UF -> UF</p> <!-- Titulo da coluna interna-->
                                        <select name="operacao" class="campoTabela operacao" id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao_said'] -->
                                            <?php
                                            foreach ($array_seletores['operacao_said'] as $operacao) {
                                                echo ("<option value='" . $operacao['valor'] . "'>" . $operacao['nome'] . "</option>");
                                            }
                                            ?>
                                        </select>

                                        <div class="caixa-campo-texto"><label for="icms-saida">ICMS Saida</label>
                                            <input id="icms-saida" type="text" name="icms-saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                            <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                            <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="impostos-federais">Impostos Federais</label>
                                            <input id="impostos-federais" type="text" name="impostos-federais" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="desconto-concedido">Desconto Concedido</label>
                                            <input id="desconto-concedido" type="text" name="desconto-concedido" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                            <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="ipi_saida">IPI</label>
                                            <input id="ipi_saida" type="text" name="ipi_saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="taxa-de-desconto">Taxa</label>
                                            <input id="taxa" type="text" name="taxa" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="comissao">Comissão</label>
                                            <input id="comissao" type="text" name="comissao" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="frete_saida">Frete</label>
                                            <input id="frete_saida" type="text" name="frete_saida" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="custo-fixo">Custo Fixo</label>
                                            <input id="custo-fixo" type="text" name="custo-fixo" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="margem-calculada">Margem Calculada</label>
                                            <input id="margem-calculada" type="text" name="margem-calculada" class="campoTabela valor porcentagem" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="preco-venda-informado">Preço Venda Informado</label>
                                            <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="lucro-projetado">Lucro Projetado</label>
                                            <input id="lucro-projetado" type="text" name="lucro-projetado" class="campoTabela valor real" value="0,00">
                                        </div>

                                        <div class="caixa-campo-texto"><label for="carga-tributaria">Carga Tributária</label>
                                            <input id="carga-tributaria" type="text" name="carga-tributaria" class="campoTabela valor porcentagem" value="0,00">
                                        </div>


                                    </div>
                                </div>

                            </div>


                        </div>


                        <div class="col-md-1 colunas-pai painelVariantes">
                            <!-- Funções -->
                            <div class="table-responsivo entradas">
                                <h5 class="text-center coluna-titulo">Variantes</h5> <!-- Titulo da coluna -->

                                <div class="table-responsive" id="variantes">

                                    <!-- Inicio dos campos -->
                                    <select name="regime" class="funcoes varianteCampo">
                                        <!-- regime -->
                                        <option value="regime">REGIME</option>
                                        <?php
                                        foreach ($array_seletores['regime'] as $regime) {
                                            echo ("<option value='" . $regime['valor'] . "'>" . $regime['nome'] . "</option>");
                                        }
                                        ?>
                                    </select>

                                    <select name="preco-de-venda" class="funcoes varianteCampo" id="preco-de-venda">
                                        <option value="preco-de-venda">PRECO DE VENDA</option>
                                        <?php
                                        foreach ($array_seletores['preco_venda'] as $preco_venda) {
                                            echo ("<option value='" . $preco_venda['valor'] . "'>" . $preco_venda['nome'] . "</option>");
                                        }
                                        ?>
                                    </select>

                                    <select name="fornecedor" class="funcoes varianteCampo" id="fornecedor">
                                        <option value="fornecedor">FORNECEDOR</option>
                                        <?= $dados['estados'] ?>
                                    </select>

                                    <select name="tipo-fornecedor" class="funcoes varianteCampo" id="tipo-fornecedor">
                                        <option value="tipo-fornecedor">TIPO DE FORNECEDOR</option>
                                        <?php
                                        foreach ($array_seletores['tipo_fornecedor'] as $tipo_fornecedor) {
                                            echo ("<option value='" . $tipo_fornecedor['valor'] . "'>" . $tipo_fornecedor['nome'] . "</option>");
                                        }
                                        ?>
                                    </select>

                                    <select name="cliente" class="funcoes varianteCampo" id="cliente">
                                        <option value="cliente">CLIENTE</option>
                                        <?= $dados['estados'] ?>
                                    </select>

                                    <select name="tipo-cliente" class="funcoes varianteCampo" id="tipo-cliente">
                                        <option value="tipo-cliente">TIPO CLIENTE</option>
                                        <?php
                                        foreach ($array_seletores['tipo_cliente'] as $tipo_cliente) {
                                            echo ("<option value='" . $tipo_cliente['valor'] . "'>" . $tipo_cliente['nome'] . "</option>");
                                        }
                                        ?>
                                    </select>

                                    <select name="tipo-produto" class="funcoes varianteCampo" id="tipo-produto">
                                        <option value="tipo-produto">TIPO PRODUTO</option>
                                        <?php
                                        foreach ($array_seletores['tipo_produto'] as $tipo_produto) {
                                            echo ("<option value='" . $tipo_produto['valor'] . "'>" . $tipo_produto['nome'] . "</option>");
                                        }
                                        ?>
                                    </select>


                                    <select name="origem" class="funcoes varianteCampo" id="origem">
                                        <option value="origem">ORIGEM</option>
                                        <?php
                                        foreach ($array_seletores['origem'] as $origem) {
                                            echo ("<option value='" . $origem['valor'] . "'>" . $origem['nome'] . "</option>");
                                        }
                                        ?>
                                    </select>

                                    <select name="lista-do-produto" class="funcoes varianteCampo" id="lista-do-produto">
                                        <option value="lista-do-produto">LISTA DO PRODUTO</option>
                                        <?php
                                        foreach ($array_seletores['lista_do_produto'] as $lista_do_produto) {
                                            echo ("<option value='" . $lista_do_produto['valor'] . "'>" . $lista_do_produto['nome'] . "</option>");
                                        }
                                        ?>
                                    </select>
                                    <input style="border: solid #e1651b 1px; width: 100%; text-align: center;" class="varianteCampo" type="text" name="ncm" placeholder="NCM" id="ncm">

                                    <button id="myInput" type="button" data-toggle="modal" data-target="#defUf" class="btn btn-primary btn-block btn-sm" style="background: #e1651b; border-color: #e1651b;width: 100%;text-align:center;">
                                        CONFIG
                                    </button>


                                </div>
                            </div>

                            <div class="abrir" onclick="abrir()">
                                <img src="<?= DIST ?>img/engrenagem.png" alt="">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- DEFINIR FILIAIS -->
<div class="modal fade" id="defUf" tabindex="-1" role="dialog" aria-labelledby="defUfLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defUfLabel">DEFINIR FILIAIS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="col-md-12 colunas-pai" style="padding: 1px;">
                    <!-- Primeira coluna interna -->
                    <div class="table-responsive">
                        <select name="empresa1" id="empresa1" class="inputs">
                            <?= $dados['options'] ?>
                        </select>
                        <input type="button" class="input-func" value="EDITAR" onclick="editarFilial(1)" data-dismiss="modal"> <input type="button" class="input-func" value="DELETAR" data-dismiss="modal" onclick="deletarFilial(1)" name="" id="">
                        <select name="empresa2" id="empresa2" class="inputs">
                            <?= $dados['options'] ?>
                        </select>
                        <input type="button" class="input-func" value="EDITAR" onclick="editarFilial(2)" data-dismiss="modal"> <input type="button" class="input-func" value="DELETAR" data-dismiss="modal" onclick="deletarFilial(2)" name="" id="">

                        <input type="button" class="btn btn-secondary" onclick="cadastrarEmpresa()" style="margin: 10px;" value="CADASTRAR EMPRESA" name="cadastrar-empresa" id="cadastrar" data-dismiss="modal">

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
                <button type="button" class="btn btn-primary" onclick="selecionarFiliais()">SELECIONAR</button>
            </div>
        </div>
    </div>
</div>

<!-- balao -->
<div id="balao" style="display: none; opacity: 0;transition: 1s">
    <p id="frasebalao">
        teste
    </p>
</div>

<style>
    div#balao {
        height: 8vh;
        width: 14%;
        background: grey;
        border-radius: 18px;
        padding: 5px;
        color: white;
        text-align: center;
        position: absolute;
    }
</style>

<!-- Inicio do grafico -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
<!-- Fim do grafico -->

<script>
    var ufs = "<?= $dados['estados'] ?>";

    var filiais;

    var doc;
    var preco_do_produto = 0;
    var redutor = 0;
    var repasse = 0;
    var desconto = 0;
    var despesas = 0;
    var pis_cofins_importacao = 0;
    var pis_cofins_credito = 0;
    var ipi = 0;
    var ii = 0;
    var frete = 0;
    var credito_icms = 0;
    var difal_entrada = 0;
    var icms_st = 0;
    var preco_da_compra = 0;
    var preco_de_custo = 0;

    // Saidas
    var icms_saida = 0;
    var difal_fecp_saida = 0;
    var icms_st_efetivo = 0;
    var impostos_federais = 0;
    var desconto_concedido = 0;
    var pis_cofins_debito = 0;
    var ipi_saida = 0;
    var taxa = 0;
    var comissao = 0;
    var frete_saida = 0;
    var custo_fixo = 0;
    var margem_calculada = 0;
    var preco_venda_informado = 0;
    var lucro_projetado = 0;
    var carga_tributaria = 0;

    var preco_do_produto_v = 0;
    var redutor_v = 0;
    var repasse_v = 0;
    var desconto_v = 0;
    var despesas_v = 0;
    var pis_cofins_importacao_v = 0;
    var pis_cofins_credito_v = 0;
    var ipi_v = 0;
    var ii_v = 0;
    var frete_v = 0;
    var credito_icms_v = 0;
    var difal_entrada_v = 0;
    var icms_st_v = 0;
    var preco_da_compra_v = 0;
    var preco_de_custo_v = 0;

    // Entradas

    function calcular() {
        <?php
        $empresa = new Empresa();
        $regras = $empresa->listarRegras();


        for ($i = 0; $i < 3; $i++) {
            foreach ($regras as $regra) {
                echo ($regra['regra']);
            }
        }
        ?>
    }

    // selecionar texto do input ao clicar no input

    window.onload = function() {
        $('input').click(function() {
            $(this).select();
        });

        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        $('#myModal').on('shown.bs.modal', function() {
            $('#cadastrar').trigger('focus')
        })

        $('.real').mask('#.##0,00', {
            reverse: true
        });
        $('.porcentagem').mask('#.##0,00%', {
            reverse: true
        });
    }

    function cadastrarEmpresa() {
        setTimeout(function() {
            $("#cadastrarEmpresa").modal({
                show: true
            });
            document.getElementById('cad_uf').innerHTML = "<option value=''></option>" + ufs;
        }, 1000);
    }

    // $('.card-body').change(function() {
    //     doc = $('.entrada_um')[0];
    //     atualizar();
    //     calcular();
    //     atualizar();
    //     calcular();
    //     doc = $('.entrada_dois')[0];
    //     atualizar();
    //     calcular()
    //     atualizar();
    //     calcular()

    // });

    // $('.entrada_um').change(function() {
    // })

    // $('.entrada_dois').change(function() {
    // })

    function selecionarFiliais() {
        empresa1 = $("#empresa1").val()
        empresa2 = $("#empresa2").val()

        $.ajax({
            url: '<?= URL ?>formPreco/selecionarFiliais',
            type: 'POST',
            data: {
                empresa1: empresa1,
                empresa2: empresa2
            },
            success: function(data) {
                filiais = JSON.parse(data.split("resultadoJson")[1]);
                document.querySelectorAll('.empresa1text').forEach(function(ufalvo) {
                    ufalvo.innerHTML = filiais['filial1']['uf'];
                })
                document.querySelectorAll('.empresa2text').forEach(function(ufalvo) {
                    ufalvo.innerHTML = filiais['filial2']['uf'];
                })
            }
        })

        document.querySelectorAll('.coluna_entradas').forEach(function(coluna) {
            doc = coluna;
            atualizar();
        })

        document.querySelectorAll('.coluna_saidas').forEach(function(coluna) {
            doc = coluna;
            atualizar();
        })
    }

    function deletarFilial(num) {
        id = $("empresa" + num).val("");

        $.ajax({
            url: "<?= URL ?>formPreco/deletarFilial",
            type: "POST",
            data: {
                id: id
            },
            success: function(response) {

            }

        })
    }

    function abrir() {
        painelDistancia = document.querySelector('.painelVariantes').offsetLeft
        tamanhoTela = window.innerWidth

        console.log(painelDistancia, tamanhoTela)
        img = document.querySelector('.abrir>img')

        if (painelDistancia < tamanhoTela - 40) {
            document.querySelector('.painelVariantes').classList.add('left100')
            document.querySelector('.painelVariantes').classList.remove('left75')
            img.style.transform = "rotate(0deg)";
        } else {
            document.querySelector('.painelVariantes').classList.remove('left100')
            document.querySelector('.painelVariantes').classList.add('left75')
            img.style.transform = "rotate(360deg)";
        }


    }
</script>

<style>
    p {
        margin: 0;
    }

    .table {
        width: 40%;
    }

    .input {
        width: 60%;
    }

    .operacao {
        width: 100%;
    }

    .operacao option {
        text-align: center;
    }


    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    #modalConfigFiliais {
        width: 90%;
        margin: auto;
    }

    .inputs {
        border: solid 1px #e7e6e6;
        margin: 2%;
        width: 50%;
    }

    input.input-func {
        width: 20%;
    }

    .modal-header {
        BACKGROUND: #5f729b;
        color: white;
    }

    form#cadastrar-empresa select {
        width: 50%;
        right: 10%;
        position: absolute;
    }

    form#cadastrar-empresa p {
        padding: 5px;
    }
</style>