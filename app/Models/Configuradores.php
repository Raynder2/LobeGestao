<?php

    class Configuradores {

        public function aliquotas($dados){
            ?>
            <form action="" method="post">
                De<select name="origem" id="origem" onchange="calcular_aliquota()">
                    <?php
                        echo "<option value='UF'>UF</option>".$dados['estados'];
                        
                    ?>
                </select>
                para<select name="destino" id="destino" onchange="calcular_aliquota()">
                    <?php
                        echo "<option value='UF'>UF</option>".$dados['estados'];
                    ?>
                    </select>
                aliquota <input type="text" name="alq" id="alq">
            </form>

            <div class="button" onclick="alterar_aliquota()">
                <p>Alterar aliquota</p>   
            </div>

            <?php

        }

        public function seletores($dados){
            ?>
            <form action="" method="post">
                <p>Campo &nbsp;<select name="referencia" onchange="listarSeletoresCadastrados(this.value)" id="referencia" style="width:50%;">
                    <option value="">Selecione</option>
                    <option value="operacao_entr">Operação Entrada</option>
                    <option value="operacao_said">Operação Saida</option>
                    <option value="regime">Regime</option>
                    <option value="tipo-fornecedor">Tipo de Fornecedor</option>
                    <option value="tipo-cliente">Tipo de Cliente</option>
                    <option value="tipo-produto">Tipo de Produto</option>
                    <option value="origem">Origem</option>
                    <option value="lista-produto">Lista do Produto</option>
                    <option value="tipo-empresa">Tipo da Empresa</option>
                    <option value="regime-tributario">Regime Tributario da Empresa</option>
                </select></p>

                <p>Seletor
                    <input type="text" name="seletor" id="seletor" style="width:50%;">
                </p>
            </form>

            <div class="button" onclick="cadastrar_seletor()">
                <p>Cadastrar seletor</p>  
            </div>

            <div class="titulo">
                <h4>Seletores Cadastrados</h4>
            </div>

            <p>Seletores &nbsp;<select name="seletorCadastrado" id="seletores" style="width: 50%;">
            </select></p>

            <div class="button" onclick="cadastrar_seletor()">
                <p>Excluir Seletor</p>  
            </div>

            </div>
            <?php
        }
    }