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

    if(isset($dados['seletores']) && !empty($dados['seletores'])){
        $array_seletores = array();
        /*Vamos percorrer o array e verificar qual a referencia atual e criar um array de arrays por referencia
          Como temos que criar o primeiro elemento do array antes de começar a ultilizar o array_push
          Colocamos um valor para a posição 0 conforme linha 31 e assim que a referencia mudar linha 27-29 vamos remover a posição 0*/

        foreach($dados['seletores'] as $seletor){
            if(isset($nomeseletor) && !empty($nomeseletor) && $nomeseletor != $seletor['referencia']){
                array_shift($array_seletores[$nomeseletor]);
            }
            $nomeseletor = $seletor['referencia'];
            $array_seletores[$nomeseletor][0] = $seletor;
            array_push($array_seletores[$nomeseletor], $seletor);
        }
        array_shift($array_seletores[$nomeseletor]);
    }
?>
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">

                    <form action=""> <!-- inicio do formulario -->

                        <div class="col-md-4 colunas-pai" style="border-color: #800080;"> <!-- Primeira coluna -->
                            <div class="table-responsive entradas">
                                <h5 class="text-center coluna-titulo" style="background: #800080;">Entradas</h5> <!-- Titulo da coluna -->
        
                                <div class="coluna_entradas entrada_um col-md-6 colunas-pai" style="padding: 1px;"> <!-- Primeira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #800080;"><span id="fornecedortext">UF</span> - > <span class="empresa1text">UF</span></p> <!-- Titulo da coluna interna-->
                                        
                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="operacao"  id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao'] -->
                                            <?php
                                                foreach($array_seletores['operacao_entr'] as $operacao){
                                                    echo("<option value='".$operacao['valor']."'>".$operacao['nome']."</option>");
                                                }
                                            ?>
                                        </select>
                                        
                                        <label for="valor">Preço do Produto</label>
                                        <input id="precodoproduto" type="text" name="valor" class="valor real"  value="0,00">

                                        <label for="redutor">Redutor</label>
                                        <input id="redutor" type="text" name="redutor" class="valor porcentagem" value="0,00">

                                        <label for="repasse">Repasse</label>
                                        <input id="repasse" type="text" name="repasse" class="valor porcentagem" value="0,00">

                                        <label for="desconto">Desconto</label>
                                        <input id="desconto" type="text" name="desconto" class="valor porcentagem" value="0,00">

                                        <label for="despesas">Despesas</label>
                                        <input id="despesas" type="text" name="despesas" class="valor real"  value="0,00">

                                        <label for="pis-cofins-importacao">Pis/Cofins Importação</label>
                                        <input id="pis-cofins-importacao" type="text" name="pis-cofins-importacao" class="valor porcentagem" value="0,00">

                                        <label for="pis-cofins-credito">Pis/Cofins Crédito</label>
                                        <input id="pis-cofins-credito" type="text" name="pis-cofins-credito" class="valor porcentagem" value="0,00">

                                        <label for="ipi">IPI</label>
                                        <input id="ipi" type="text" name="ipi" class="valor porcentagem" value="0,00">

                                        <label for="ii">II</label>
                                        <input id="ii" type="text" name="ii" class="valor real"  value="0,00">

                                        <label for="frete">Frete</label>
                                        <input id="frete" type="text" name="frete" class="valor real"  value="0,00">

                                        <label for="credito-icms">Crédito ICMS</label>
                                        <input id="credito-icms" type="text" name="credito-icms" class="valor porcentagem" value="0,00">

                                        <label for="difal-entrada">Difal Entrada</label>
                                        <input id="difal-entrada" type="text" name="difal-entrada" class="valor porcentagem" value="0,00">

                                        <label for="icms-st">ICMS ST</label>
                                        <input id="icms-st" type="text" name="icms-st" class="valor porcentagem" value="0,00">

                                        <label for="preco-da-compra">Preço da Compra</label>
                                        <input id="preco-da-compra" type="text" name="preco-da-compra" class="valor real"  value="0,00">

                                        <label for="preco-de-custo">Preço de Custo</label>
                                        <input id="preco-de-custo" type="text" name="preco-de-custo" class="valor real"  value="0,00">

                                        
                                    </div>
                                </div>
        
                                <div class="coluna_entradas entrada_dois col-md-6 colunas-pai" style="padding: 1px;"> <!-- Segunda coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #800080;"><span id="fornecedortext">UF</span> -> <span class="empresa2text">UF</span></p> <!-- Titulo da coluna interna-->
                                        <select name="operacao" class="operacao"  id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao'] -->
                                            <?php
                                                foreach($array_seletores['operacao_entr'] as $operacao){
                                                    echo("<option value='".$operacao['valor']."'>".$operacao['nome']."</option>");
                                                }
                                            ?>
                                        </select>
                                        
                                        <label for="valor">Preço do Produto</label>
                                        <input id="precodoproduto" type="text" name="valor" class="valor real"  value="0,00">

                                        <label for="redutor">Redutor</label>
                                        <input id="redutor" type="text" name="redutor" class="valor porcentagem" value="0,00">

                                        <label for="repasse">Repasse</label>
                                        <input id="repasse" type="text" name="repasse" class="valor porcentagem" value="0,00">

                                        <label for="desconto">Desconto</label>
                                        <input id="desconto" type="text" name="desconto" class="valor porcentagem" value="0,00">

                                        <label for="despesas">Despesas</label>
                                        <input id="despesas" type="text" name="despesas" class="valor real"  value="0,00">

                                        <label for="pis-cofins-importacao">Pis/Cofins Importação</label>
                                        <input id="pis-cofins-importacao" type="text" name="pis-cofins-importacao" class="valor porcentagem" value="0,00">

                                        <label for="pis-cofins-credito">Pis/Cofins Crédito</label>
                                        <input id="pis-cofins-credito" type="text" name="pis-cofins-credito" class="valor porcentagem" value="0,00">

                                        <label for="ipi">IPI</label>
                                        <input id="ipi" type="text" name="ipi" class="valor porcentagem" value="0,00">

                                        <label for="ii">II</label>
                                        <input id="ii" type="text" name="ii" class="valor real"  value="0,00">

                                        <label for="frete">Frete</label>
                                        <input id="frete" type="text" name="frete" class="valor real"  value="0,00">

                                        <label for="credito-icms">Crédito ICMS</label>
                                        <input id="credito-icms" type="text" name="credito-icms" class="valor porcentagem" value="0,00">

                                        <label for="difal-entrada">Difal Entrada</label>
                                        <input id="difal-entrada" type="text" name="difal-entrada" class="valor porcentagem" value="0,00">

                                        <label for="icms-st">ICMS ST</label>
                                        <input id="icms-st" type="text" name="icms-st" class="valor porcentagem" value="0,00">

                                        <label for="preco-da-compra">Preço da Compra</label>
                                        <input id="preco-da-compra" type="text" name="preco-da-compra" class="valor real"  value="0,00">

                                        <label for="preco-de-custo">Preço de Custo</label>
                                        <input id="preco-de-custo" type="text" name="preco-de-custo" class="valor real"  value="0,00">

                                        <!-- Criar sql para inserir campos -->
                                        <!-- insert into campos (nome, fantasia, familia) values ('operacao', 'operação', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('precodoproduto', 'preço do produto', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('redutor', 'redutor', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('repasse', 'repasse', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('desconto', 'desconto', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('despesas', 'despesas', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('pis-cofins-importacao', 'pis/cofins importação', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('pis-cofins-credito', 'pis/cofins crédito', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('ipi', 'ipi', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('ii', 'ii', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('frete', 'frete', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('credito-icms', 'crédito icms', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('difal-entrada', 'difal entrada', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('icms-st', 'icms st', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('preco-da-compra', 'preço da compra', 'painel');
                                        insert into campos (nome, fantasia, familia) values ('preco-de-custo', 'preço de custo', 'painel'); -->
                                        


                                        
                                    </div>
                                </div>
                                
        
                            </div>
        
        
                        </div>
        
                        <div class="col-md-7 colunas-pai" style="border-color: #008080;"> <!-- Segunda coluna -->
                            <div class="table-responsive entradas">
                                <h5 class="text-center coluna-titulo" style="background: #008080;">Saidas</h5> <!-- Titulo da coluna -->
        
                                <div class="coluna_saidas saida_um col-md-4 colunas-pai" style="padding: 1px;"> <!-- Primeira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #008080;"> <span class="empresa1text">UF</span> -> UF</p> <!-- Titulo da coluna interna-->
                                        
                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="operacao"  id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao_said'] -->
                                            <?php
                                                foreach($array_seletores['operacao_said'] as $operacao){
                                                    echo("<option value='".$operacao['valor']."'>".$operacao['nome']."</option>");
                                                }
                                            ?>
                                        </select>
                                        
                                        <label for="icms-saida">ICMS Saida</label>
                                        <input id="icms-saida" type="text" name="icms-saida" class="valor porcentagem" value="0,00">

                                        <label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                        <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="valor porcentagem" value="0,00">

                                        <label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                        <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="valor porcentagem" value="0,00">

                                        <label for="impostos-federais">Impostos Federais</label>
                                        <input id="impostos-federais" type="text" name="impostos-federais" class="valor porcentagem" value="0,00">

                                        <label for="desconto-concedido">Desconto Concedido</label>
                                        <input id="desconto-concedido" type="text" name="desconto-concedido" class="valor porcentagem" value="0,00">

                                        <label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                        <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="valor porcentagem" value="0,00">

                                        <label for="ipi_saida">IPI</label>
                                        <input id="ipi_saida" type="text" name="ipi_saida" class="valor porcentagem" value="0,00">

                                        <label for="taxa-de-desconto">Taxa</label>
                                        <input id="taxa" type="text" name="taxa" class="valor porcentagem" value="0,00">

                                        <label for="comissao">Comissão</label>
                                        <input id="comissao" type="text" name="comissao" class="valor porcentagem" value="0,00">

                                        <label for="frete_saida">Frete</label>
                                        <input id="frete_saida" type="text" name="frete_saida" class="valor porcentagem" value="0,00">

                                        <label for="custo-fixo">Custo Fixo</label>
                                        <input id="custo-fixo" type="text" name="custo-fixo" class="valor porcentagem" value="0,00">

                                        <label for="margem-calculada">Margem Calculada</label>
                                        <input id="margem-calculada" type="text" name="margem-calculada" class="valor porcentagem" value="0,00">

                                        <label for="preco-venda-informado">Preço Venda Informado</label>
                                        <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="valor real"  value="0,00">

                                        <label for="lucro-projetado">Lucro Projetado</label>
                                        <input id="lucro-projetado" type="text" name="lucro-projetado" class="valor real"  value="0,00">
                                        
                                        <label for="carga-tributaria">Carga Tributária</label>
                                        <input id="carga-tributaria" type="text" name="carga-tributaria" class="valor porcentagem" value="0,00">

                                        


                                    </div>
                                </div>
                                
                                <div class="coluna_saidas saida_dois col-md-4 colunas-pai" style="padding: 1px;"> <!-- Segunda coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #008080;"> <span class="empresa2text">UF</span> -> UF</p> <!-- Titulo da coluna interna-->
                                        
                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="operacao"  id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao_said'] -->
                                            <?php
                                                foreach($array_seletores['operacao_said'] as $operacao){
                                                    echo("<option value='".$operacao['valor']."'>".$operacao['nome']."</option>");
                                                }
                                            ?>
                                        </select>
                                        
                                        <label for="icms-saida">ICMS Saida</label>
                                        <input id="icms-saida" type="text" name="icms-saida" class="valor porcentagem" value="0,00">

                                        <label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                        <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="valor porcentagem" value="0,00">

                                        <label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                        <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="valor porcentagem" value="0,00">

                                        <label for="impostos-federais">Impostos Federais</label>
                                        <input id="impostos-federais" type="text" name="impostos-federais" class="valor porcentagem" value="0,00">

                                        <label for="desconto-concedido">Desconto Concedido</label>
                                        <input id="desconto-concedido" type="text" name="desconto-concedido" class="valor porcentagem" value="0,00">

                                        <label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                        <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="valor porcentagem" value="0,00">

                                        <label for="ipi_saida">IPI</label>
                                        <input id="ipi_saida" type="text" name="ipi_saida" class="valor porcentagem" value="0,00">

                                        <label for="taxa-de-desconto">Taxa</label>
                                        <input id="taxa" type="text" name="taxa" class="valor porcentagem" value="0,00">

                                        <label for="comissao">Comissão</label>
                                        <input id="comissao" type="text" name="comissao" class="valor porcentagem" value="0,00">

                                        <label for="frete_saida">Frete</label>
                                        <input id="frete_saida" type="text" name="frete_saida" class="valor porcentagem" value="0,00">

                                        <label for="custo-fixo">Custo Fixo</label>
                                        <input id="custo-fixo" type="text" name="custo-fixo" class="valor porcentagem" value="0,00">

                                        <label for="margem-calculada">Margem Calculada</label>
                                        <input id="margem-calculada" type="text" name="margem-calculada" class="valor porcentagem" value="0,00">

                                        <label for="preco-venda-informado">Preço Venda Informado</label>
                                        <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="valor real"  value="0,00">

                                        <label for="lucro-projetado">Lucro Projetado</label>
                                        <input id="lucro-projetado" type="text" name="lucro-projetado" class="valor real"  value="0,00">
                                        
                                        <label for="carga-tributaria">Carga Tributária</label>
                                        <input id="carga-tributaria" type="text" name="carga-tributaria" class="valor porcentagem" value="0,00">

                                        


                                    </div>
                                </div>
        
                                <div class="coluna_saidas saida_tres col-md-4 colunas-pai" style="padding: 1px;"> <!-- Terceira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #008080;">UF -> UF</p> <!-- Titulo da coluna interna-->
                                        <select name="operacao" class="operacao"  id="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <!-- Listar $array_seletores['operacao_said'] -->
                                            <?php
                                                foreach($array_seletores['operacao_said'] as $operacao){
                                                    echo("<option value='".$operacao['valor']."'>".$operacao['nome']."</option>");
                                                }
                                            ?>
                                        </select>
                                        
                                        <label for="icms-saida">ICMS Saida</label>
                                        <input id="icms-saida" type="text" name="icms-saida" class="valor porcentagem" value="0,00">

                                        <label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                        <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="valor porcentagem" value="0,00">

                                        <label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                        <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="valor porcentagem" value="0,00">

                                        <label for="impostos-federais">Impostos Federais</label>
                                        <input id="impostos-federais" type="text" name="impostos-federais" class="valor porcentagem" value="0,00">

                                        <label for="desconto-concedido">Desconto Concedido</label>
                                        <input id="desconto-concedido" type="text" name="desconto-concedido" class="valor porcentagem" value="0,00">

                                        <label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                        <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="valor porcentagem" value="0,00">

                                        <label for="ipi_saida">IPI</label>
                                        <input id="ipi_saida" type="text" name="ipi_saida" class="valor porcentagem" value="0,00">

                                        <label for="taxa-de-desconto">Taxa</label>
                                        <input id="taxa" type="text" name="taxa" class="valor porcentagem" value="0,00">

                                        <label for="comissao">Comissão</label>
                                        <input id="comissao" type="text" name="comissao" class="valor porcentagem" value="0,00">

                                        <label for="frete_saida">Frete</label>
                                        <input id="frete_saida" type="text" name="frete_saida" class="valor porcentagem" value="0,00">

                                        <label for="custo-fixo">Custo Fixo</label>
                                        <input id="custo-fixo" type="text" name="custo-fixo" class="valor porcentagem" value="0,00">

                                        <label for="margem-calculada">Margem Calculada</label>
                                        <input id="margem-calculada" type="text" name="margem-calculada" class="valor porcentagem" value="0,00">

                                        <label for="preco-venda-informado">Preço Venda Informado</label>
                                        <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="valor real"  value="0,00">

                                        <label for="lucro-projetado">Lucro Projetado</label>
                                        <input id="lucro-projetado" type="text" name="lucro-projetado" class="valor real"  value="0,00">
                                        
                                        <label for="carga-tributaria">Carga Tributária</label>
                                        <input id="carga-tributaria" type="text" name="carga-tributaria" class="valor porcentagem" value="0,00">

                                        
                                    </div>
                                </div>
                            
        
                            </div>
        
        
                        </div>
                        
                        <div class="col-md-1 colunas-pai" style="border-color: #e1651b;"> <!-- Funções -->
                            <div class="table-responsivo entradas">
                                <h5 class="text-center coluna-titulo" style="background: #e1651b;">Variantes</h5> <!-- Titulo da coluna -->

                                <div class="table-responsive campos">
                                        
                                        <!-- Inicio dos campos -->
                                        <select name="regime" class="funcoes">
                                            <!-- regime -->
                                            <option value="regime">REGIME</option>
                                            <?php
                                                foreach($array_seletores['regime'] as $regime){
                                                    echo("<option value='".$regime['valor']."'>".$regime['nome']."</option>");
                                                }
                                            ?>
                                        </select>

                                        <select name="preco-de-venda" class="funcoes" id="preco-de-venda">
                                            <option value="preco-de-venda">PRECO DE VENDA</option>
                                            <?php
                                                foreach($array_seletores['preco_venda'] as $preco_venda){
                                                    echo("<option value='".$preco_venda['valor']."'>".$preco_venda['nome']."</option>");
                                                }
                                            ?>
                                        </select>

                                        <select name="fornecedor" class="funcoes" id="fornecedor">
                                            <option value="fornecedor">FORNECEDOR</option>
                                            <?=$dados['estados']?>
                                        </select>

                                        <select name="tipo-fornecedor"  class="funcoes" id="tipo-fornecedor">
                                            <option value="tipo-fornecedor">TIPO DE FORNECEDOR</option>
                                            <?php
                                                foreach($array_seletores['tipo-fornecedor'] as $tipo_fornecedor){
                                                    echo("<option value='".$tipo_fornecedor['valor']."'>".$tipo_fornecedor['nome']."</option>");
                                                }
                                            ?>
                                        </select>

                                        <select name="cliente" class="funcoes" id="cliente">
                                            <option value="cliente">CLIENTE</option>
                                            <?=$dados['estados']?>
                                        </select>

                                        <select name="tipo-cliente" class="funcoes" id="tipo-cliente">
                                            <option value="tipo-cliente">TIPO CLIENTE</option>
                                            <?php
                                                foreach($array_seletores['tipo-cliente'] as $tipo_cliente){
                                                    echo("<option value='".$tipo_cliente['valor']."'>".$tipo_cliente['nome']."</option>");
                                                }
                                            ?>
                                        </select>

                                        <select name="tipo-produto" class="funcoes" id="tipo-produto">
                                            <option value="tipo-produto">TIPO PRODUTO</option>
                                            <?php
                                                foreach($array_seletores['tipo-produto'] as $tipo_produto){
                                                    echo("<option value='".$tipo_produto['valor']."'>".$tipo_produto['nome']."</option>");
                                                }
                                            ?>
                                        </select>

                                        <input style="border: solid #e1651b 1px; width: 100%; text-align: center;" type="text" name="ncm" placeholder="NCM" id="ncm">

                                        <select name="origem" class="funcoes" id="origem">
                                            <option value="origem">ORIGEM</option>
                                            <?php
                                                foreach($array_seletores['origem'] as $origem){
                                                    echo("<option value='".$origem['valor']."'>".$origem['nome']."</option>");
                                                }
                                            ?>
                                        </select>

                                        <select name="lista-do-produto" class="funcoes" id="lista-do-produto">
                                            <option value="lista-do-produto">LISTA DO PRODUTO</option>
                                            <?php
                                                foreach($array_seletores['lista-do-produto'] as $lista_do_produto){
                                                    echo("<option value='".$lista_do_produto['valor']."'>".$lista_do_produto['nome']."</option>");
                                                }
                                            ?>
                                        </select>
                                        
                                        <button id="myInput" type="button" data-toggle="modal" data-target="#defUf" class="btn btn-primary btn-block btn-sm" style="background: #e1651b; border-color: #e1651b;width: 100%;text-align:center;">
                                            CONFIG
                                        </button>

                                        
                                </div>
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
            
            <div class="col-md-12 colunas-pai" style="padding: 1px;"> <!-- Primeira coluna interna -->
                <div class="table-responsive">
                    <select name="empresa1" id="empresa1" class="inputs">
                        <?=$dados['options']?>
                    </select>
                    <input type="button" class="input-func" value="EDITAR" onclick="editarFilial(1)" data-dismiss="modal"> <input type="button" class="input-func" value="DELETAR" data-dismiss="modal" onclick="deletarFilial(1)" name="" id="">
                    <select name="empresa2" id="empresa2" class="inputs">
                        <?=$dados['options']?>
                    </select>
                    <input type="button" class="input-func" value="EDITAR" onclick="editarFilial(2)" data-dismiss="modal"> <input type="button" class="input-func" value="DELETAR" data-dismiss="modal" onclick="deletarFilial(2)" name="" id=""> 

                    <input type="button" class="btn btn-secondary" onclick="cadastrarEmpresa()" style="margin: 10px;" value="CADASTRAR EMPRESA" name="cadastrar-empresa" id="cadastrar" data-dismiss="modal" >
                    
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

<script>
    var ufs = "<?=$dados['estados']?>";

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

    // Entradas
    
    function calcular(){
        <?php
            $empresa = new Empresa();
            $regras = $empresa->listarRegras();

            for($i = 0; $i < 3; $i++){
                foreach($regras as $regra){
                    echo($regra['regra']);
                }
            }
        ?>
    }

    // selecionar texto do input ao clicar no input
    $('input').click(function(){
        $(this).select();
    });
    
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
    $('#myModal').on('shown.bs.modal', function () {
        $('#cadastrar').trigger('focus')
    })

    $('.real').mask('#.##0,00', {reverse: true});
    $('.porcentagem').mask('#.##0,00%', {reverse: true});

    function cadastrarEmpresa() {
        setTimeout(function(){
            $("#cadastrarEmpresa").modal({
                show: true
            });
            document.getElementById('cad_uf').innerHTML = "<option value=''></option>"+ufs;
        }, 1000);
    }

    $('.entrada_um').change(function(){
        doc = $('.entrada_um')[0];
        atualizar();
        calcular();
    })

    $('.entrada_dois').change(function(){
        doc = $('.entrada_dois')[0];
        atualizar();
        calcular()
    })

    function selecionarFiliais(){
        empresa1 = $("#empresa1").val()
        empresa2 = $("#empresa2").val()

        $.ajax({
            url: '<?=URL?>formPreco/selecionarFiliais',
            type: 'POST',
            data: {
                empresa1: empresa1,
                empresa2: empresa2
            },
            success: function(data){
                filiais = JSON.parse(data.split("resultadoJson")[1]);
                document.querySelectorAll('.empresa1text').forEach(function(ufalvo){
                    ufalvo.innerHTML = filiais['filial1']['uf'];
                })
                document.querySelectorAll('.empresa2text').forEach(function(ufalvo){
                    ufalvo.innerHTML = filiais['filial2']['uf'];
                })
            }
        })

        document.querySelectorAll('.coluna_entradas').forEach(function(coluna){
            doc = coluna;
            atualizar();
        })

        document.querySelectorAll('.coluna_saidas').forEach(function(coluna){
            doc = coluna;
            atualizar();
        })
    }

    function deletarFilial(num){
        id = $("empresa"+num).val("");

        $.ajax({
            url: "<?=URL?>formPreco/deletarFilial",
            type: "POST",
            data: {
                id: id
            },
            success: function(response){
                
            }

        })
    }
</script>

<style>
    p{
        margin: 0;
    }
    .coluna-titulo{
        color: white;
        padding: 5px;
    }
    .colunas-pai {
        padding: 5px;
        border: solid 1px;
        float: left;
    }
    .table{
        width: 40%;
    }
    .input{
        width: 60%;
    }

    .operacao{
        width: 100%;
    }
    .operacao option{
        text-align: center;
    }

    .campos label {
        float: left;
        font-size: 8pt;
        width: 50%;
    }
    .campos input {
        width: 50%;
    }
    .funcoes{
        font-size: 8pt;
        background: #e1651b;
        border: none;
        margin: 5px auto;
        color: white;
        height: 38px;
        width: 100%;
        text-align: center;
    }
    select{
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
