<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formação de Preço Lobe | <a href="<?=URL?>">Casa</a> | <a href="<?=URL?>formPreco/regras">Regras</a><a href="<?=URL?>conta/sair" style="float:right;"><span style="color:grey;"><?=ucfirst($_SESSION['usuario']['nome']."  ");?></span>Sair</a></h4> 
                </div>
                <div class="card-body">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <input type="button" onclick="escreve(this.alt, this.value)" value="Se" id="se" alt="if(">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Senão" id="senao" alt="else(">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="E" id="e" alt=" && ">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Ou" id="ou" alt=" || ">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Maior que" id="maior" alt=" > ">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Menor que" id="menor" alt=" < ">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Igual a" id="igual" alt=" == ">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Diferente de" id="diferente" alt=" != ">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Então" id="entao" alt="){">
                                <input type="button" onclick="escreve(this.alt, this.value),split=1;" value="Conter" id="conter" alt=".split('">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Não Contem" id="naoContem" alt=".split('">
                                <input type="button" onclick="escreve(this.alt, this.value)" value="Recebe" id="recebe" alt=" = ">
                                
                                
                                
                            </div>

                            <br>
                            
                            <div class="col-md-12">
                                <input type="text" name="valor" id="valor">
                                <input type="button" onclick="envia()" value="Envia" id="envia">
                                <input type="button" onclick="envia('R$')" value="R$" id="envia_real">
                                <input type="button" onclick="envia('%')" value="%" id="envia_porc">
                            </div>
                        </div>
                        <br>

                        <form action="">
                            <input type="text" id="exemplo" name="exemplo" disabled style="width:50%;"><input type="button" onclick="limpa()" value="Limpar" id="limpar"><input type="button" onclick="salvarRegra()" value="Salvar" id="salvar">
                            <input type="text" id="regra" name="regra" disabled style="width:50%;display:block;" >
                        </form>
    
                    </div>

                </div>

                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 colunas-pai" style="padding: 1px;"> <!-- COLUNA ENTRADAS -->
                                <div class="table-responsive campos">

                                    <p class="text-center coluna-titulo" style="background: #800080;">Entradas</p> <!-- Titulo da coluna interna-->
                                    <input type="button" alt="operacao.value" name="operacao" id="operacao" value="Operação" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="valor.value" name="valor" id="valor" value="Preço do Produto" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="redutor.value" name="redutor" id="redutor" value="Redutor" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="repasse.value" name="repasse" id="repasse" value="Repasse" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="desconto.value" name="desconto" id="desconto" value="Desconto" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="despesas.value" name="despesas" id="despesas" value="Despesas" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="pis_cofins_importacao.value" name="pis-cofins-importacao" id="pis-cofins-importacao" value="Pis/Cofins Importação" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="pis_cofins_credito.value" name="pis-cofins-credito" id="pis-cofins-credito" value="Pis/Cofins Crédito" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="ipi.value" name="ipi" id="ipi" value="IPI" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="ii.value" name="ii" id="ii" value="II" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="frete.value" name="frete" id="frete" value="Frete" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="credito_icms.value" name="credito-icms" id="credito-icms" value="Crédito ICMS" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="difal_entrada.value" name="difal-entrada" id="difal-entrada" value="Difal Entrada" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="icms_st.value" name="icms-st" id="icms-st" value="ICMS ST" onclick="escreve(this.alt, this.value)">
                                    <input id="preco-da-compra" alt="preco_da_compra.value" type="button" name="preco-da-compra" class="valor real" value="preco-da-compra" onclick="escreve(this.alt, this.value)">
                                    <input id="preco-de-custo" alt="preco_de_custo.value" type="button" name="preco-de-custo" class="valor real" value="preco-de-custo" onclick="escreve(this.alt, this.value)">

                                    
                                </div>
                            </div>

                            
                            <div class="col-md-3 colunas-pai" style="padding: 1px;"> <!-- COLUNA SAIDAS -->
                                <div class="table-responsive campos">

                                    <p class="text-center coluna-titulo" style="background: #008080;">Saidas</p> <!-- Titulo da coluna interna-->
                                    <input type="button" alt="operacao.value" name="operacao" id="operacao" value="Operação" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="icms_saida.value" name="icms-saida" id="icms-saida" value="ICMS Saida" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="difal_fecp_saida.value" name="difal-fecp-saida" id="difal-fecp-saida" value="Difal Fecp Saida" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="icms_st_efetivo.value" name="icms-st-efetivo" id="icms-st-efetivo" value="ICMS ST Efetivo" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="imposto_federais.value" name="imposto-federais" id="imposto-federais" value="Imposto Federais" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="desconto_concedido.value" name="desconto-concedido" id="desconto-concedido" value="Desconto Concedido" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="pis_cofins_debito.value" name="pis-cofins-debito" id="pis-cofins-debito" value="Pis/Cofins Débito" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="ipi.value" name="ipi" id="ipi" value="IPI" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="taxa.value" name="taxa" id="taxa" value="Taxa" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="comissao.value" name="comissao" id="comissao" value="Comissão" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="frete.value" name="frete" id="frete" value="Frete" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="custo_fixo.value" name="custo-fixo" id="custo-fixo" value="Custo Fixo" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="margem_calculada.value" name="margem-calculada" id="margem-calculada" value="Margem Calculada" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="preco_venda_informado.value" name="preco-venda-informado" id="preco-venda-informado" value="Preço Venda Informado" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="lucro_projetado.value" name="lucro-projetado" id="lucro-projetado" value="Lucro Projetado" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="carga_tributario.value" name="carga-tributario" id="carga-tributario" value="Carga Tributário" onclick="escreve(this.alt, this.value)">

                                </div>
                            </div>
                            
                            <div class="col-md-3 colunas-pai" style="padding: 1px;"> <!-- COLUNA EMPRESAS -->
                                <div class="table-responsive campos">

                                    <p class="text-center coluna-titulo" style="background: #5f729b;">Empresas</p> <!-- Titulo da coluna interna-->
                                    <input type="button" alt="tipo.value" name="tipo" id="tipo" value="Tipo" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="uf.value" name="uf" id="uf" value="UF" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="regime_tributario.value" name="regime-tributario" id="regime-tributario" value="Regime Tributário" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="faturamento.value" name="faturamento" id="faturamento" value="Faturamento" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="tareto.value" name="tareto" id="tareto" value="Tare To" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="tarego.value" name="tarego" id="tarego" value="Tare Go" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="lei.value" name="lei" id="lei" value="Lei 5.005 DF" onclick="escreve(this.alt, this.value)">
                                    <input type="button" alt="taregomex.value" name="taregomex" id="taregomex" value="Tare Go MEX" onclick="escreve(this.alt, this.value)">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    .campos input, select{
        width: 100%;
    }
</style>
<script>
    var criterios = 0;
    var split = 0;
    var entao = 0;
    var campoAlvo;


    function escreve(code, valor){
        criterios++;
        if(entao == 1){
            campoAlvo = code
            entao = 0
        }

        var exemplo = document.getElementById('exemplo').value;
        var regra = document.getElementById('regra').value;

        document.getElementById('exemplo').value = exemplo +' '+ valor;
        document.getElementById('regra').value = regra + code;

        if(valor == "Então"){
            entao = 1;
        }
    }

    function envia(incremento = ''){
        if(entao == 1){
            campoAlvo = code
            entao = 0
        }
        
        var vari = document.getElementById('valor').value;
        var regra = document.getElementById('regra').value;
        var exemplo = document.getElementById('exemplo').value;

        document.getElementById('exemplo').value = exemplo +' '+ vari;
        document.getElementById('regra').value = regra +"'"+ vari +incremento+"'";

        if(split){
            document.getElementById('regra').value = document.getElementById('regra').value + "') > 0";
            split = 0;
        }
    }

    function limpa(){
        document.getElementById('exemplo').value = '';
        document.getElementById('regra').value = '';
        console.log(criterios);
    }

    function salvarRegra(){
        var regra = document.getElementById('regra').value + ";}";
        $.ajax({
            url: "<?=URL?>formPreco/salvarRegras",
            type: "POST",
            data: {
                regra: regra,
                campoAlvo: campoAlvo,
                criterios: criterios
            },
            success: function(data){
                console.log(data);
            }
        })
    }

</script>
