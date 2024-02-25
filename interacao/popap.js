
var bodi = document.getElementById("bodi")
var popap = document.getElementById("popap")
var trans = document.getElementById("fundo_transparente")
var botao_sair = document.getElementById("sair_popap")

popap.style.display = "none"
trans.style.display = "none"
botao_sair.style.display = "none"

function remover(cook){
    Cookies.remove(cook)
}

if(Cookies.get("pode_ir")){
    popap.style.display = "none"
    trans.style.display = "none"
}else {
    popap.style.display = "block"
    trans.style.display = "block"
    bodi.style.overflow = "hidden"
}

function pular () {

    var botao_pulo = document.getElementById("pular_cont")
    var imagem_popap = document.getElementById("imagem_do_popap")
    var texto = document.getElementById("texto_do_popap")
    var botao = document.getElementById("contem_buttom_popap")
    var botao_sair = document.getElementById("sair_popap")

    imagem_popap.src = "../midia/img/foto003.jpeg"
    texto.style.display = "none"
    botao_pulo.style.display = "none"
    botao.style.display = "none"
    botao_sair.style.display = "flex"
}

function sair_do_popap(){

    var bodi = document.getElementById("bodi")
    var popap = document.getElementById("popap")
    var trans = document.getElementById("fundo_transparente")

    Cookies.set("pode_ir",true,{expires: 365 * 200})
    popap.style.display = "none"
    trans.style.display = "none"
    bodi.style.overflow = "visible"
}
