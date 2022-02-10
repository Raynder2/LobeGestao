<?php
    if(isset($_SESSION['usuario']['nome']) && !empty($_SESSION['usuario']['nome'])){
        ?>
        <div class="card-header">
            <h4 class="card-title"><a href="<?=URL?>formPreco/index">Formação de Preço Lobe</a> | <a href="<?=URL?>">Casa</a> | <a href="<?=URL?>formPreco/regras">Regras</a> | <a href="<?=URL?>formPreco/configuracoes">Configurações</a><a href="<?=URL?>conta/sair" style="float:right;"><span style="color:grey;"><?=ucfirst($_SESSION['usuario']['nome']."  ");?></span>Sair</a></h4> 
        </div>
        <?php
    }
?>