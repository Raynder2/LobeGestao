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
                                <!-- <button>Se</button>
                                <button>Senão</button>
                                <button>E</button>
                                <button>Ou</button>
                                <button>Maior</button>
                                <button>Menor</button>
                                <button>Igual</button>
                                <button>Diferente</button>
                                <button>Entre</button>
                                <button>Recebe</button> -->

                                <input type="button" onclick="escreve(this.value)" value="Se" id="se">
                                <input type="button" onclick="escreve(this.value)" value="Senão" id="senao">
                                <input type="button" onclick="escreve(this.value)" value="E" id="e">
                                <input type="button" onclick="escreve(this.value)" value="Ou" id="ou">
                                <input type="button" onclick="escreve(this.value)" value="Maior que" id="maior">
                                <input type="button" onclick="escreve(this.value)" value="Menor que" id="menor">
                                <input type="button" onclick="escreve(this.value)" value="Igual a" id="igual">
                                <input type="button" onclick="escreve(this.value)" value="Diferente de" id="diferente">
                                <input type="button" onclick="escreve(this.value)" value="Entre" id="entre">
                                <input type="button" onclick="escreve(this.value)" value="Então" id="entao">
                                <input type="button" onclick="escreve(this.value)" value="Contem" id="contem">
                                <input type="button" onclick="escreve(this.value)" value="Não Contem" id="naoContem">
                                <input type="button" onclick="escreve(this.value)" value="Recebe" id="recebe">
                                
                                
                                
                            </div>

                            <br>
                            
                            <div class="col-md-12">
                                <input type="text" name="valor" id="valor">
                                <input type="button" onclick="envia()" value="Envia" id="envia">
                            </div>
                        </div>
                        <br>

                        <form action="">
                            <input type="text" id="exemplo" name="exemplo" disabled style="width:50%;"><input type="button" onclick="limpa()" value="Limpar" id="limpar">
                            <input type="text" id="regra" name="regra" disabled style="display:none;" >
                        </form>
    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var criterios = 0;

    function escreve(valor){
        criterios++;

        var exemplo = document.getElementById('exemplo').value;
        var regra = document.getElementById('regra').value;

        document.getElementById('exemplo').value = exemplo +' '+ valor;
        document.getElementById('regra').value = regra +' '+ valor;
    }

    function envia(){
        var vari = document.getElementById('valor').value;
        var regra = document.getElementById('regra').value;
        var exemplo = document.getElementById('exemplo').value;

        document.getElementById('exemplo').value = exemplo +' '+ vari;
        document.getElementById('regra').value = regra +' '+ vari;
    }

    function limpa(){
        document.getElementById('exemplo').value = '';
        document.getElementById('regra').value = '';
        console.log(criterios);
    }

</script>
