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

    var exemplo = getExemplo();
    var regra = getRegra();

    setExemplo(exemplo +' '+ valor);
    setRegra(regra + code);

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
    var regra = getRegra();
    var exemplo = getExemplo();

    setExemplo(exemplo +' '+ vari);
    setRegra(regra +"'"+ vari +incremento+"'");

    if(split){
        setRegra(getRegra() + "') > 0");
        split = 0;
    }
}

function limpa(){
    setExemplo('');
    setRegra('');
    console.log(criterios);
}

function salvarRegra(){
    var regra = getRegra() + ";}";
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

function getRegra(){
    return document.getElementById('regra').value;
}

function getExemplo(){
    return document.getElementById('exemplo').value;
}

function setRegra(regra){
    document.getElementById('regra').value = regra;
}

function setExemplo(exemplo){
    document.getElementById('exemplo').value = exemplo;
}
