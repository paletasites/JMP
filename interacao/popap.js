
var bodi = document.getElementById("bodi")
var popap = document.getElementById("popap")
var trans = document.getElementById("fundo_transparente")

popap.style.display = "none"
trans.style.display = "none"

function sair_do_popap(){
    Cookies.set("pode_ir",true,{expires: 365 * 200})
    popap.style.display = "none"
    trans.style.display = "none"
    bodi.style.overflow = "visible"
}

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

var botao_pulo = document.querySelector("pular_cont")
var imagem_popap = document.getElementById("imagem_do_popap")
var texto = document.getElementById("texto_do_popap")
var botao = document.querySelectorAll("contem_button_popap")

function pular () {
    /*console.log("pulei a primeira sessoa do popap :)")
    imagem_popap.src = "../midia/img/foto003.jpeg"
    console.log("mudei a imagem")
    texto.style.display = "none"
    console.log("texto oculto")
    // botao.style.display = "none"
    console.log("botao sumiu")*/
    console.log("ola mundo")
}
