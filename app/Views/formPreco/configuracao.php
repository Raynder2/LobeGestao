<div class="conteudo-central">
    <nav class="opcoes-edicao">
        <ul>
            <?php
            foreach ($dados['listas'] as $itemLista) {
                if ($itemLista == $dados['lista']) {
                    echo "<li  class='ativo'><a href='" . URL . "formPreco/" . $itemLista . "'>" . ucfirst($itemLista) . "</a></li>";
                } else {
                    echo ("<li><a href='" . $itemLista . "'>" . ucfirst($itemLista) . "</a></li>");
                }
            }
            ?>
            <!-- <li class="ativo">Campos</li>
            <li class="">Aliquotas</li>
            <li class="">Regras</li> -->
        </ul>
    </nav>

    <!-- tabela -->
    <div class="tabela">

        <div class="caixa-de-pesquisa">
            <input type="text" placeholder="Pesquisar"> <button onclick="trocar()">CADASTRAR</button>
        </div>

        <table cellpadding="4">
            <thead>
                <tr>
                    <?php
                    // print_r($dados);exit();
                    foreach ($dados['colunas'] as $coluna) {
                        echo ("<th>" . ucfirst(str_replace('_', ' ', $coluna)) . "</th>");
                    }
                    ?>
                    <th>Açõoes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($dados['linhas'] as $linha) {
                    echo ("<tr>");
                    foreach ($dados['colunas'] as $coluna) {
                        echo ("<td>" . $linha[$coluna] . "</td>");
                    }
                    echo ("<td><a href='" . URL . "formPreco/editar/" . $linha['id'] . "'>Editar</a> | <a href='" . URL . "formPreco/excluir/" . $linha['id'] . "'>Excluir</a></td>");
                    echo ("</tr>");
                }
                ?>
            </tbody>
        </table>
    </div>

    <div style="display: none;" class="tabela">

        <div class="caixa-de-pesquisa">
            <button onclick="trocar()">Listar</button>
        </div>

        <!-- Formulario -->
        <form action="">
            <!-- um for para criar input para cada item da coluna -->
            <?php
            foreach ($dados['colunas'] as $coluna) {
                echo ("<input type='text' name='" . $coluna . "' placeholder='" . ucfirst(str_replace('_', ' ', $coluna)) . "'>");
            }
            ?>

            <button id="enviar">Cadastrar</button>

        </form>
        <style>
            form>input {
                margin: 7px 2%;
                width: 40%;

            }

            form>button {
                min-width: 15%;
                margin: 10px;
                background: #1d1552;
                color: white;
            }
        </style>
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

    <script>
        

        function trocar() {
            selecAll('.conteudo-central>.tabela').forEach((table) => {
                if (table.style.display == 'none') {
                    table.style.display = 'block';
                } else {
                    table.style.display = 'none';
                }
            });
        }

        // chamar função assim que o botao enviar for clicado
        window.onload = function() {
            selec('#enviar').addEventListener('click', function(e) {
                e.preventDefault();
                            
                if(dados = selecValues('.conteudo-central>.tabela>form>input')){
                    // enviar os dados para o servidor
                    $.ajax({
                        url: 'cadastrar',
                        type: 'POST',
                        data: {
                            dados: dados,
                            table: '<?php echo $dados['lista'] ?>'
                        },
                        success: function(response) {
                            resposta = JSON.parse(response.split("resultadoJson")[1]);
                            alerta(resposta.mensagem, resposta.status);
                        }
                    })
                }
            });
        }
    </script>

</div>