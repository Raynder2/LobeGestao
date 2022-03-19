<div class="conteudo-central">
    <nav class="opcoes-edicao">
        <ul>
            <?php
            foreach($dados['listas'] as $itemLista){
                if($itemLista == $dados['lista']){
                    echo "<li  class='ativo'><a href='".URL."formPreco/configuracao/".$itemLista."'>".ucfirst($itemLista)."</a></li>";
                }else{
                    echo("<li><a href='".$itemLista."'>".ucfirst($itemLista)."</a></li>");
                }
            }
            ?>
            <!-- <li class="ativo">Campos</li>
            <li class="">Aliquotas</li>
            <li class="">Regras</li> -->
        </ul>
    </nav>
    
    <div class="caixa-de-pesquisa">
        <input type="text" placeholder="Pesquisar"> <button>CADASTRAR</button>
    </div>
    
    <!-- tabela -->
    <div class="tabela">
        <table border="1" cellpadding="4">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Familia</th>
                    <th>Tipo</th>
                    <th>Visivel</th>
                    <th>Editável</th>
                    <th>Açõoes</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 10; $i++) {
                ?>
                    <tr>
                        <td>Raynder Cardoso de Carvalho 1999</td>
                        <td>Cardoso Carvalho Silva Santos Sousa</td>
                        <td>2</td>
                        <td>sim</td>
                        <td>nao</td>
                        <td>apagar</td>
                    </tr>
    
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    
    <div class="divPagination">
        <ul class="pagination">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a class="active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">»</a></li>
        </ul>
    </div>
    
</div>