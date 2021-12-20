<?php
    if(isset($dados) && !empty($dados)){
        if(isset($dados['selecao']) && !empty($dados['selecao'])){
            



        }
        else if(isset($dados['status']) && !empty($dados['status'])){
            if($dados['status'] == 'sucesso'){
                echo("<script>swal.fire('".$dados['mensagem']."','','success');</script>");
            }
            else{
                echo("<script>swal.fire('".$dados['mensagem']."','','error');</script>");
            }
        }
    }
?>
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formação de Preço Lobe | <a href="<?=URL?>">Casa</a> | <a href="<?=URL?>formPreco/regras">Regras</a><a href="<?=URL?>conta/sair" style="float:right;"><span style="color:grey;"><?=ucfirst($_SESSION['usuario']['nome']."  ");?></span>Sair</a></h4> 
                </div>
                <div class="card-body">

                    <form action=""> <!-- inicio do formulario -->

                        <div class="col-md-4 colunas-pai" style="border-color: #800080;"> <!-- Primeira coluna -->
                            <div class="table-responsive entradas">
                                <h5 class="text-center coluna-titulo" style="background: #800080;">Entradas</h5> <!-- Titulo da coluna -->
        
                                <div class="col-md-6 colunas-pai" style="padding: 1px;"> <!-- Primeira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #800080;">UF - > UF</p> <!-- Titulo da coluna interna-->
                                        
                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
                                            <option value="importacao">IMPORTAÇÃO</option>
                                        </select>
                                        
                                        <label for="valor">Preço do Produto</label>
                                        <input id="precodoproduto" type="text" name="valor" class="valor real" placeholder="R$0,00">

                                        <label for="redutor">Redutor</label>
                                        <input id="redutor" type="text" name="redutor" class="valor porcentagem" placeholder="0,00%">

                                        <label for="repasse">Repasse</label>
                                        <input id="repasse" type="text" name="repasse" class="valor porcentagem" placeholder="0,00%">

                                        <label for="desconto">Desconto</label>
                                        <input id="desconto" type="text" name="desconto" class="valor porcentagem" placeholder="0,00%">

                                        <label for="despesas">Despesas</label>
                                        <input id="despesas" type="text" name="despesas" class="valor real" placeholder="R$0,00">

                                        <label for="pis-cofins-importacao">Pis/Cofins Importação</label>
                                        <input id="pis-cofins-importacao" type="text" name="pis-cofins-importacao" class="valor porcentagem" placeholder="0,00%">

                                        <label for="pis-cofins-credito">Pis/Cofins Crédito</label>
                                        <input id="pis-cofins-credito" type="text" name="pis-cofins-credito" class="valor porcentagem" placeholder="0,00%">

                                        <label for="ipi">IPI</label>
                                        <input id="ipi" type="text" name="ipi" class="valor porcentagem" placeholder="0,00%">

                                        <label for="ii">II</label>
                                        <input id="ii" type="text" name="ii" class="valor real" placeholder="R$0,00">

                                        <label for="frete">Frete</label>
                                        <input id="frete" type="text" name="frete" class="valor real" placeholder="R$0,00">

                                        <label for="credito-icms">Crédito ICMS</label>
                                        <input id="credito-icms" type="text" name="credito-icms" class="valor porcentagem" placeholder="0,00%">

                                        <label for="difal-entrada">Difal Entrada</label>
                                        <input id="difal-entrada" type="text" name="difal-entrada" class="valor porcentagem" placeholder="0,00%">

                                        <label for="icms-st">ICMS ST</label>
                                        <input id="icms-st" type="text" name="icms-st" class="valor porcentagem" placeholder="0,00%">

                                        <label for="preco-da-compra">Preço da Compra</label>
                                        <input id="preco-da-compra" type="text" name="preco-da-compra" class="valor real" placeholder="R$0,00">

                                        <label for="preco-de-custo">Preço de Custo</label>
                                        <input id="preco-de-custo" type="text" name="preco-de-custo" class="valor real" placeholder="R$0,00">

                                        
                                    </div>
                                </div>
        
                                <div class="col-md-6 colunas-pai" style="padding: 1px;"> <!-- Segunda coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #800080;">UF -> UF</p> <!-- Titulo da coluna interna-->
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
                                            <option value="importacao">IMPORTAÇÃO</option>
                                        </select>
                                        
                                        <label for="valor">Preço do Produto</label>
                                        <input id="precodoproduto" type="text" name="valor" class="valor real" placeholder="R$0,00">

                                        <label for="redutor">Redutor</label>
                                        <input id="redutor" type="text" name="redutor" class="valor porcentagem" placeholder="0,00%">

                                        <label for="repasse">Repasse</label>
                                        <input id="repasse" type="text" name="repasse" class="valor porcentagem" placeholder="0,00%">

                                        <label for="desconto">Desconto</label>
                                        <input id="desconto" type="text" name="desconto" class="valor porcentagem" placeholder="0,00%">

                                        <label for="despesas">Despesas</label>
                                        <input id="despesas" type="text" name="despesas" class="valor real" placeholder="R$0,00">

                                        <label for="pis-cofins-importacao">Pis/Cofins Importação</label>
                                        <input id="pis-cofins-importacao" type="text" name="pis-cofins-importacao" class="valor porcentagem" placeholder="0,00%">

                                        <label for="pis-cofins-credito">Pis/Cofins Crédito</label>
                                        <input id="pis-cofins-credito" type="text" name="pis-cofins-credito" class="valor porcentagem" placeholder="0,00%">

                                        <label for="ipi">IPI</label>
                                        <input id="ipi" type="text" name="ipi" class="valor porcentagem" placeholder="0,00%">

                                        <label for="ii">II</label>
                                        <input id="ii" type="text" name="ii" class="valor real" placeholder="R$0,00">

                                        <label for="frete">Frete</label>
                                        <input id="frete" type="text" name="frete" class="valor real" placeholder="R$0,00">

                                        <label for="credito-icms">Crédito ICMS</label>
                                        <input id="credito-icms" type="text" name="credito-icms" class="valor porcentagem" placeholder="0,00%">

                                        <label for="difal-entrada">Difal Entrada</label>
                                        <input id="difal-entrada" type="text" name="difal-entrada" class="valor porcentagem" placeholder="0,00%">

                                        <label for="icms-st">ICMS ST</label>
                                        <input id="icms-st" type="text" name="icms-st" class="valor porcentagem" placeholder="0,00%">

                                        <label for="preco-da-compra">Preço da Compra</label>
                                        <input id="preco-da-compra" type="text" name="preco-da-compra" class="valor real" placeholder="R$0,00">

                                        <label for="preco-de-custo">Preço de Custo</label>
                                        <input id="preco-de-custo" type="text" name="preco-de-custo" class="valor real" placeholder="R$0,00">

                                        
                                    </div>
                                </div>
                                
        
                            </div>
        
        
                        </div>
        
                        <div class="col-md-7 colunas-pai" style="border-color: #008080;"> <!-- Segunda coluna -->
                            <div class="table-responsive entradas">
                                <h5 class="text-center coluna-titulo" style="background: #008080;">Saidas</h5> <!-- Titulo da coluna -->
        
                                <div class="col-md-4 colunas-pai" style="padding: 1px;"> <!-- Primeira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #008080;">Saida</p> <!-- Titulo da coluna interna-->
                                        
                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="venda">VENDA</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
                                        </select>
                                        
                                        <label for="icms-saida">ICMS Saida</label>
                                        <input id="icms-saida" type="text" name="icms-saida" class="valor porcentagem" placeholder="0,00%">

                                        <label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                        <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="valor porcentagem" placeholder="0,00%">

                                        <label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                        <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="valor porcentagem" placeholder="0,00%">

                                        <label for="impostos-federais">Impostos Federais</label>
                                        <input id="impostos-federais" type="text" name="impostos-federais" class="valor porcentagem" placeholder="0,00%">

                                        <label for="desconto-concedido">Desconto Concedido</label>
                                        <input id="desconto-concedido" type="text" name="desconto-concedido" class="valor porcentagem" placeholder="0,00%">

                                        <label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                        <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="valor porcentagem" placeholder="0,00%">

                                        <label for="ipi">IPI</label>
                                        <input id="ipi" type="text" name="ipi" class="valor porcentagem" placeholder="0,00%">

                                        <label for="taxa-de-desconto">Taxa</label>
                                        <input id="taxa" type="text" name="taxa" class="valor porcentagem" placeholder="0,00%">

                                        <label for="comissao">Comissão</label>
                                        <input id="comissao" type="text" name="comissao" class="valor porcentagem" placeholder="0,00%">

                                        <label for="frete">Frete</label>
                                        <input id="frete" type="text" name="frete" class="valor porcentagem" placeholder="0,00%">

                                        <label for="custo-fixo">Custo Fixo</label>
                                        <input id="custo-fixo" type="text" name="custo-fixo" class="valor porcentagem" placeholder="0,00%">

                                        <label for="margem-calculada">Margem Calculada</label>
                                        <input id="margem-calculada" type="text" name="margem-calculada" class="valor porcentagem" placeholder="0,00%">

                                        <label for="preco-venda-informado">Preço Venda Informado</label>
                                        <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="valor real" placeholder="R$0,00">

                                        <label for="lucro-projetado">Lucro Projetado</label>
                                        <input id="lucro-projetado" type="text" name="lucro-projetado" class="valor real" placeholder="R$0,00">
                                        
                                        <label for="carga-tributaria">Carga Tributária</label>
                                        <input id="carga-tributaria" type="text" name="carga-tributaria" class="valor porcentagem" placeholder="0,00%">

                                        


                                    </div>
                                </div>
                                
                                <div class="col-md-4 colunas-pai" style="padding: 1px;"> <!-- Primeira coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #008080;">Saida</p> <!-- Titulo da coluna interna-->
                                        
                                        <!-- Inicio dos campos -->
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="venda">VENDA</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
                                        </select>
                                        
                                        <label for="icms-saida">ICMS Saida</label>
                                        <input id="icms-saida" type="text" name="icms-saida" class="valor porcentagem" placeholder="0,00%">

                                        <label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                        <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="valor porcentagem" placeholder="0,00%">

                                        <label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                        <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="valor porcentagem" placeholder="0,00%">

                                        <label for="impostos-federais">Impostos Federais</label>
                                        <input id="impostos-federais" type="text" name="impostos-federais" class="valor porcentagem" placeholder="0,00%">

                                        <label for="desconto-concedido">Desconto Concedido</label>
                                        <input id="desconto-concedido" type="text" name="desconto-concedido" class="valor porcentagem" placeholder="0,00%">

                                        <label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                        <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="valor porcentagem" placeholder="0,00%">

                                        <label for="ipi">IPI</label>
                                        <input id="ipi" type="text" name="ipi" class="valor porcentagem" placeholder="0,00%">

                                        <label for="taxa-de-desconto">Taxa</label>
                                        <input id="taxa" type="text" name="taxa" class="valor porcentagem" placeholder="0,00%">

                                        <label for="comissao">Comissão</label>
                                        <input id="comissao" type="text" name="comissao" class="valor porcentagem" placeholder="0,00%">

                                        <label for="frete">Frete</label>
                                        <input id="frete" type="text" name="frete" class="valor porcentagem" placeholder="0,00%">

                                        <label for="custo-fixo">Custo Fixo</label>
                                        <input id="custo-fixo" type="text" name="custo-fixo" class="valor porcentagem" placeholder="0,00%">

                                        <label for="margem-calculada">Margem Calculada</label>
                                        <input id="margem-calculada" type="text" name="margem-calculada" class="valor porcentagem" placeholder="0,00%">

                                        <label for="preco-venda-informado">Preço Venda Informado</label>
                                        <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="valor real" placeholder="R$0,00">

                                        <label for="lucro-projetado">Lucro Projetado</label>
                                        <input id="lucro-projetado" type="text" name="lucro-projetado" class="valor real" placeholder="R$0,00">
                                        
                                        <label for="carga-tributaria">Carga Tributária</label>
                                        <input id="carga-tributaria" type="text" name="carga-tributaria" class="valor porcentagem" placeholder="0,00%">

                                        


                                    </div>
                                </div>
        
                                <div class="col-md-4 colunas-pai" style="padding: 1px;"> <!-- Segunda coluna interna -->
                                    <div class="table-responsive campos">
                                        <p class="text-center coluna-titulo" style="background: #008080;">Saida</p> <!-- Titulo da coluna interna-->
                                        <select name="operacao" class="operacao">
                                            <option value="operacao">OPERAÇÃO</option>
                                            <option value="venda">VENDA</option>
                                            <option value="bonificacao">BONIFICAÇÃO</option>
                                            <option value="transparencia">TRANSPARÊNCIA</option>
                                        </select>
                                        
                                        <label for="icms-saida">ICMS Saida</label>
                                        <input id="icms-saida" type="text" name="icms-saida" class="valor porcentagem" placeholder="0,00%">

                                        <label for="difal-fecp-saida">Difal + Fecp Saida</label>
                                        <input id="difal-fecp-saida" type="text" name="difal-fecp-saida" class="valor porcentagem" placeholder="0,00%">

                                        <label for="icms-st-efetivo">ICMS ST Efetivo</label>
                                        <input id="icms-st-efetivo" type="text" name="icms-st-efetivo" class="valor porcentagem" placeholder="0,00%">

                                        <label for="impostos-federais">Impostos Federais</label>
                                        <input id="impostos-federais" type="text" name="impostos-federais" class="valor porcentagem" placeholder="0,00%">

                                        <label for="desconto-concedido">Desconto Concedido</label>
                                        <input id="desconto-concedido" type="text" name="desconto-concedido" class="valor porcentagem" placeholder="0,00%">

                                        <label for="pis-cofins-debito">Pis/Cofins Debito</label>
                                        <input id="pis-cofins-debito" type="text" name="pis-cofins-debito" class="valor porcentagem" placeholder="0,00%">

                                        <label for="ipi">IPI</label>
                                        <input id="ipi" type="text" name="ipi" class="valor porcentagem" placeholder="0,00%">

                                        <label for="taxa-de-desconto">Taxa</label>
                                        <input id="taxa" type="text" name="taxa" class="valor porcentagem" placeholder="0,00%">

                                        <label for="comissao">Comissão</label>
                                        <input id="comissao" type="text" name="comissao" class="valor porcentagem" placeholder="0,00%">

                                        <label for="frete">Frete</label>
                                        <input id="frete" type="text" name="frete" class="valor porcentagem" placeholder="0,00%">

                                        <label for="custo-fixo">Custo Fixo</label>
                                        <input id="custo-fixo" type="text" name="custo-fixo" class="valor porcentagem" placeholder="0,00%">

                                        <label for="margem-calculada">Margem Calculada</label>
                                        <input id="margem-calculada" type="text" name="margem-calculada" class="valor porcentagem" placeholder="0,00%">

                                        <label for="preco-venda-informado">Preço Venda Informado</label>
                                        <input id="preco-venda-informado" type="text" name="preco-venda-informado" class="valor real" placeholder="R$0,00">

                                        <label for="lucro-projetado">Lucro Projetado</label>
                                        <input id="lucro-projetado" type="text" name="lucro-projetado" class="valor real" placeholder="R$0,00">
                                        
                                        <label for="carga-tributaria">Carga Tributária</label>
                                        <input id="carga-tributaria" type="text" name="carga-tributaria" class="valor porcentagem" placeholder="0,00%">

                                        
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
                                            
                                        </select>

                                        <select name="funcoes" class="funcoes">
                                            <option value="tipo-fornecedor">TIPO FORNECEDOR</option>
                                            <option value="atacadista">ATACADISTA</option>
                                            <option value="industria">INDUSTRIA</option>
                                            <option value="varejista">VAREJISTA</option>
                                            <option value="importacao">IMPORTACAO</option>
                                        </select>

                                        <select name="funcoes" class="funcoes">
                                            <option value="cliente">CLIENTE</option>

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
                            <?php
                                $empresa = new Empresa();
                                $options = $empresa->listarEmpresas();
                                echo($options);
                            ?>
                        </select>
                        <input type="button" class="input-func" value="EDITAR" data-dismiss="modal"> <input type="button" class="input-func" value="DELETAR" data-dismiss="modal" name="" id="">
                        <select name="empresa2" id="empresa2" class="inputs">
                            <?php
                                echo($options);
                            ?>
                        </select>
                        <input type="button" class="input-func" value="EDITAR" data-dismiss="modal"> <input type="button" class="input-func" value="DELETAR" data-dismiss="modal" name="" id=""> 

                        <input type="button" class="btn btn-secondary" onclick="cadastrarEmpresa()" style="margin: 10px;" value="CADASTRAR EMPRESA" name="cadastrar-empresa" id="cadastrar" data-dismiss="modal" >
                        
                    </div>
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
                <button type="button" class="btn btn-primary">SALVAR</button>
            </div>
            </div>
        </div>
    </div>


<!-- CADASTRAR EMPRESA -->
<div class="modal fade" id="cadastrarEmpresa" tabindex="-1" role="dialog" aria-labelledby="defUfLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="defUfLabel">CADASTRAR EMPRESA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="col-md-12 colunas-pai" style="padding: 1px;"> <!-- Primeira coluna interna -->
            <div class="table-responsive">
                <form action="cadastrarEmpresa" method="post" id="cadastrar-empresa">

                    Nome da Empresa:<input class="inputs" name="nome" placeholder="">
    
                    <p>
                    Tipo:<select name="tipo" id="cad_tipo">
                        <option value=""></option>
                        <option value="ATACADISTA">ATACADISTA</option>
                        <option value="VAREJISTA">VAREJISTA</option>
                        <option value="INDUSTRIA">INDUSTRIA</option>
                        <option value="IMPORTADOR">IMPORTADOR</option>
                    </select></p>
    
                    <p>
                    UF:<select class="inputs" name="uf" id="cad_uf">
                        <option value=""></option>
                    </select></p>
    
                    <p>
                    Regime Tributario:<select required="required" class="inputs" name="regime" id="cad_regime">
                        <option value=""></option>
                        <option value="SIMPLES">SIMPLES</option>
                        <option value="LUCRO PRESUMIDO">LUCRO PRESUMIDO</option>
                        <option value="LUCRO REAL">LUCRO REAL</option>
                    </select></p>
    
                    Faturamento acumulado:<input class="inputs" placeholder="RS0,00"> 
    
                    
                    <p>
                    TARE TO:<select required="required" class="inputs" name="tareto" id="cad_tareto">
                        <option value=""></option>
                        <option value="SIM">SIM</option>
                        <option value="NAO">NAO</option>
                    </select></p>
                    
                    <p>
                    TARE GO:<select required="required" class="inputs" name="tarego" id="cad_tarego">
                        <option value=""></option>
                        <option value="SIM">SIM</option>
                        <option value="NAO">NAO</option>
                    </select></p>
                    
                    <p>
                    LEI 5.005 DF:<select required="required" class="inputs" name="lei" id="cad_lei">
                        <option value=""></option>
                        <option value="SIM">SIM</option>
                        <option value="NAO">NAO</option>
                    </select></p>
                    
                    <p>
                    TARE COMEX GO:<select required="required" class="inputs" name="taregomex" id="cad_tarecomex">
                        <option value=""></option>
                        <option value="SIM">SIM</option>
                        <option value="NAO">NAO</option>
                    </select></p>
                    
                    <p>
                    CREDITA IPI<select required="required" class="inputs" name="credita" id="cad_credita">
                        <option value=""></option>
                        <option value="SIM">SIM</option>
                        <option value="NAO">NAO</option>
                    </select></p>
                        
            </div>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
        <input type="submit" value="CADASTRAR"  class="btn btn-primary">
        </form>

      </div>
    </div>
  </div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
    $('#myModal').on('shown.bs.modal', function () {
        $('#cadastrar').trigger('focus')
    })
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

<script>
    $('.real').mask('#.##0,00', {reverse: true});
    $('.porcentagem').mask('#.##0,00%', {reverse: true});

    function cadastrarEmpresa() {
        setTimeout(function(){
            $("#cadastrarEmpresa").modal({
                show: true
            });
        }, 1000);
    }
</script>

