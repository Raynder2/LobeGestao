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
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
                                            <option value="importacao">IMPORTAÇÃO</option>
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
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
                                            <option value="importacao">IMPORTAÇÃO</option>
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
                                
        
                            </div>
        
        
                        </div>
        
                        <div class="col-md-7 colunas-pai" style="border-color: #008080;"> <!-- Segunda coluna -->
                            <div class="table-responsive entradas">
                                <h5 class="text-center coluna-titulo" style="background: #008080;">Saidas</h5> <!-- Titulo da coluna -->
        
                                <div class="coluna_saidas saida_um col-md-4 colunas-pai" style="padding: 1px;"> <!-- Primeira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #008080;"> <span class="empresa1text">UF</span> -> UF</p> <!-- Titulo da coluna interna-->
                                        
                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="venda">VENDA</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
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
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="venda">VENDA</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
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
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="venda">VENDA</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
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
                                        <select name="funcoes" class="funcoes">
                                            <option value="teste1">FORMAÇÃO</option>
                                            <option value="regime">REGIME</option>
                                            <option value="intermediario">INTERMEDIÁRIO</option>
                                            <option value="cross-docking">CROSS DOCKING</option>
                                            <option value="planejameto">PLANEJAMENTO</option>
                                        </select>

                                        <select name="funcoes" class="funcoes">
                                            <option value="preco-de-venda">PRECO DE VENDA</option>
                                            <option value="margem">MARGEM</option>
                                        </select>

                                        <select name="funcoes" class="funcoes">
                                            <option value="fornecedor">FORNECEDOR</option>
                                            <?=$dados['estados']?>
                                        </select>

                                        <select name="funcoes"  class="funcoes">
                                            <option value="tipo-fornecedor">TIPO FORNECEDOR</option>
                                            <option value="atacadista">ATACADISTA</option>
                                            <option value="industria">INDUSTRIA</option>
                                            <option value="varejista">VAREJISTA</option>
                                            <option value="importacao">IMPORTACAO</option>
                                        </select>

                                        <select name="funcoes" class="funcoes">
                                            <option value="cliente">CLIENTE</option>
                                            <?=$dados['estados']?>
                                        </select>

                                        <select name="funcoes" class="funcoes">
                                            <option value="tipo-cliente">TIPO CLIENTE</option>
                                            <option value="consumidor-pj">CONSUMIDOR P.J</option>
                                            <option value="consumidor-pf">CONSUMIDOR PF</option>
                                            <option value=atacadista>ATACADISTA</option>
                                            <option value="varejista">VAREJISTA</option>
                                            <option value="hospital/clinicas">HOSPITAL/CLINICAS</option>
                                        </select>

                                        <select name="funcoes" class="funcoes">
                                            <option value="tipo-produto">TIPO PRODUTO</option>
                                            <option value="medicamentos">MEDICAMENTOS</option>
                                            <option value="material">MATERIAL</option>
                                            <option value="oncologico">ONCOLÓGICO</option>
                                            <option value="generico">GENÉRICO</option>
                                            <option value="pneus-de-carga">PNEUS DE CARGA</option>
                                            <option value="pneus-de-passeio">PNEUS DE PASSEIO</option>
                                        </select>

                                        <input style="border: solid #e1651b 1px; width: 100%; text-align: center;" type="text" name="ncm" placeholder="NCM">

                                        <select name="funcoes" class="funcoes">
                                            <option value="origem">ORIGEM</option>
                                            <option value="nacional">NACIONAL</option>
                                            <option value="importado">IMPORTADO</option>
                                        </select>

                                        <select name="funcoes" class="funcoes">
                                            <option value="lista-do-produto">LISTA DO PRODUTO</option>
                                            <option value="positiva">POSITIVA</option>
                                            <option value="negativa">NEGATIVA</option>
                                            <option value="neutra">NEUTRA</option>
                                            <option value="nao-aplicavel">NÃO Aplicável</option>
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
    function mudarFornecedor(){
        var fornecedor = $('#fornecedor').val();
        $('#fornecedortext').text(fornecedor);
    }
    function atualizar(){
        preco_do_produto = doc.querySelector('#precodoproduto');
        redutor = doc.querySelector('#redutor');
        repasse = doc.querySelector('#repasse');
        desconto = doc.querySelector('#desconto');
        despesas = doc.querySelector('#despesas');
        pis_cofins_importacao = doc.querySelector('#pis-cofins-importacao');
        pis_cofins_credito = doc.querySelector('#pis-cofins-credito');
        ipi = doc.querySelector('#ipi');
        ii = doc.querySelector('#ii');
        frete = doc.querySelector('#frete');
        credito_icms = doc.querySelector('#credito-icms');
        difal_entrada = doc.querySelector('#difal-entrada');
        icms_st = doc.querySelector('#icms-st');
        preco_da_compra = doc.querySelector('#preco-da-compra');
        preco_de_custo = doc.querySelector('#preco-de-custo');
    
        // Saidas
        icms_saida = doc.querySelector('#icms-saida');
        difal_fecp_saida = doc.querySelector('#difal-fecp-saida');
        icms_st_efetivo = doc.querySelector('#icms-st-efetivo');
        impostos_federais = doc.querySelector('#impostos-federais');
        desconto_concedido = doc.querySelector('#desconto-concedido');
        pis_cofins_debito = doc.querySelector('#pis-cofins-debito');
        ipi_saida = doc.querySelector('#ipi_saida');
        taxa = doc.querySelector('#taxa');
        comissao = doc.querySelector('#comissao');
        frete_saida = doc.querySelector('#frete_saida');
        custo_fixo = doc.querySelector('#custo-fixo');
        margem_calculada = doc.querySelector('#margem-calculada');
        preco_venda_informado = doc.querySelector('#preco-venda-informado');
        lucro_projetado = doc.querySelector('#lucro-projetado');
        carga_tributaria = doc.querySelector('#carga-tributaria');

        preco_do_produto_v = parseFloat(preco_do_produto.value.replace(".",""))
        redutor_v = parseFloat(redutor.value.replace("%",""))
        repasse_v = parseFloat(repasse.value.replace("%",""))
        desconto_v = parseFloat(desconto.value.replace("%",""))
        despesas_v = parseFloat(despesas.value.replace(".",""))
        pis_cofins_importacao_v = parseFloat(pis_cofins_importacao.value.replace("%",""))
        pis_cofins_credito_v = parseFloat(pis_cofins_credito.value.replace("%",""))
        ipi_v = parseFloat(ipi.value.replace("%",""))
        ii_v = parseFloat(ii.value.replace("%",""))
        frete_v = parseFloat(frete.value.replace("%",""))
        credito_icms_v = parseFloat(credito_icms.value.replace("%",""))
        difal_entrada_v = parseFloat(difal_entrada.value.replace("%",""))
        icms_st_v = parseFloat(icms_st.value.replace("%",""))
        preco_da_compra_v = parseFloat(preco_da_compra.value.replace(".",""))
        preco_de_custo_v = parseFloat(preco_de_custo.value.replace(".",""))

        temp = preco_do_produto_v - (preco_do_produto_v * (redutor_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp - (temp * (repasse_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp - (temp * (desconto_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp + despesas_v;
        preco_de_custo.value = temp.toFixed(2);
        temp = temp + (temp * (pis_cofins_importacao_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp + (temp * (pis_cofins_credito_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp + (temp * (ipi_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp + (temp * (ii_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp + (temp * (frete_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp - (temp * (credito_icms_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp + (temp * (difal_entrada_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        temp = temp + (temp * (icms_st_v / 100));
        preco_de_custo.value = temp.toFixed(2);
        

    }
    
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
