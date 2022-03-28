var criterios = 0;
var split = 0;
var entao = 0;
var campoAlvo;

var custo = 8
var imposto = 2
var outros = 0
var lucro = 0

var decremento = 0
var incremento = 0

url = "http://192.168.9.253/LobeGestao/";

$('#fornecedor').change(function () {
    mudarFornecedor();
});
$('#cliente').change(function () {
    mudarCliente();
});

// Função para mudar html dos titulos de acordo com o campo selecionado
function mudarFornecedor() {
    var fornecedor = $('#fornecedor').val();
    $('.fornecedortext').text(fornecedor);
    verificarAliquota();
}

function mudarCliente() {
    var cliente = $('#cliente').val();
    $('.clientetext').text(cliente);
    verificarAliquota();
}

// Função para criar grafico
function criarGraficoColunas(custo, credito, despesas) {
    google.charts.load("current", {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Element", "Valor", { role: "style" }],
            ["Credito", credito, "green"],
            ["Custo", custo, "silver"],
            ["Despesas", despesas, "red"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2
        ]);

        var options = {
            title: "Density of Precious Metals, in g/cm^3",
            width: 400,
            height: 300,
            bar: {
                groupWidth: "95%"
            },
            legend: {
                position: "none"
            },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
}

// Função para remover acentos
function remover_acentos(str) {
    return str.normalize("NFD").replace(/[^a-zA-Zs-]/g, "");
}

function apagartudo() {
    $.ajax({
        url: url + "formpreco/apagartudo",

        success: function () {
            alert('Todas as regras foram apagadas com sucesso');
        }
    });
}

function informacao(alvo, informacao) {
    balao = document.querySelector('#balao')
    document.getElementById('frasebalao').innerHTML = informacao;
    balao.style.left = (alvo.getBoundingClientRect().left + 40) + 'px'
    balao.style.display = 'block';
    setTimeout(() => {
        balao.style.opacity = '1';
        balao.style.left = (alvo.getBoundingClientRect().left + 40) + 'px'
        balao.style.top = (alvo.getBoundingClientRect().top + 8) + 'px'
    }, 100)


    setTimeout(function () {
        balao.style.opacity = '0';
        setTimeout(() => {
            balao.style.display = 'none';
            balao.style.top = (alvo.getBoundingClientRect().top + 48) + 'px'
        }, 700)
    }, 3000)
}

function verificarAliquota() {
    tempo = 0;
    posicao = 0;
    var alvos = new Object();

    document.querySelectorAll('.campos').forEach(function (campo) {
        campotext = campo.querySelector('.coluna-titulo')
        movimentacao = campotext.textContent;

        if (!movimentacao.includes('UF')) {
            alvos[posicao] = campotext;
        }
        posicao++;
    });

    posicao = 0;
    intervalo = setInterval(() => {
        try{
            movimentacao = alvos[posicao].textContent.replaceAll('>', '');
            movimentacao = movimentacao.replaceAll(' ', '');
            movimentacao = movimentacao.split('-');
    
            $.ajax({
                url: url + "formpreco/verificarAliquota",
                type: "POST",
                data: {
                    'origem': movimentacao[0],
                    'destino': movimentacao[1]
                },
                success: function (data) {
                    if (data.length > 0) {
                        aliquota = data.split('Resultado Alq:')[1].split('|')[0]
                        console.log(data.split('Resultado Alq:')[1].split('|')[0]);
                        if (alvos[posicao] != null) {
                            console.log('enviando alvo');
                            informacao(alvos[posicao], 'Aliquota de ' + aliquota + '% aplicada.');
                            document.querySelectorAll('.campos')[posicao].querySelector('#credito-icms').value = aliquota+'%';
                        }
                        else {
                            clearInterval(intervalo);
                        }
                        posicao++;
                        console.log(posicao);
                    }
                }
            });
        }
        catch(e){
            clearInterval(intervalo);
        }

    }, 5000)
}

function selecAll(parametro) {
    return document.querySelectorAll(parametro)
}

function selec(parametro) {
    return document.querySelector(parametro)
}

function ifNull(input){
    if (input == '' || input == null || input == undefined || input == 'undefined') {
        return true;
    }
}

function selecValues(alvo){
    let inputs = selecAll(alvo);
    let dados = {};
    let vazio = false;

    // percorrer os inputs e verificar se estão vazios
    inputs.forEach((input) => {
        if (ifNull(input.value)) {
            alerta('Preencha todos os campos!', 'error');
            vazio = true;
        }
        else {
            dados[input.name] = input.value;
        }
    });

    if(vazio){
        return false;
    }
    return dados;
}



// document.getElementById('columnchart_values').querySelector('div').querySelector('div').querySelector('div').querySelector('svg').querySelectorAll('g')[1].querySelector('g').querySelectorAll('g')[1].querySelectorAll('rect')[0].addEventListener('mouseover', function(){
//     alert('teste')
// })