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


url = "http://192.168.1.40/LobeGestao/";

// Função para mudar html dos titulos de acordo com o campo selecionado
function mudarFornecedor(){
    var fornecedor = $('#fornecedor').val();
    $('#fornecedortext').text(fornecedor);
}

// Função para criar grafico
function criarGraficoColunas(custo, credito, despesas){
    google.charts.load("current", {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Element", "Valor", {role: "style"}],
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

// document.getElementById('columnchart_values').querySelector('div').querySelector('div').querySelector('div').querySelector('svg').querySelectorAll('g')[1].querySelector('g').querySelectorAll('g')[1].querySelectorAll('rect')[0].addEventListener('mouseover', function(){
//     alert('teste')
// })