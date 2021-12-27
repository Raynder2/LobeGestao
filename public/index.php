<?php
    session_start();
    include './../app/autoload.php';
    include './../app/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=DIST?>css/style.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?=DIST?>js/jquery.mask.min.js"></script>
    <script src="<?=DIST?>js/sweetAlert.js"></script>

    <title>Lobe Gestao</title>
</head>
<body>
    
    <?php
        $rotas = new Rota();
    ?>

        
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
                        <select name="empresa1" id="empresa1">
                            <?php
                                $empresa = new Empresa();
                                $empresa->listarEmpresas();
                            ?>
                        </select>
                        <input type="button" class="input-func" value="EDITAR" data-dismiss="modal"> <input type="button" class="input-func" value="DELETAR" data-dismiss="modal" name="" id="">
                        <select name="empresa1" id="empresa1">
                            <?php
                                $empresa = new Empresa();
                                $empresa->listarEmpresas();
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

</body>

<script>
    function alerta(frase){
        swal.fire(frase);
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?=DIST?>js/main.js"></script>

</html>