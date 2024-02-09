
var fantasma = document.getElementById("fantasma")
var casca = document.getElementById("casca")
var invisivel = document.querySelector(".invisivel")
var largura = window.innerWidth
var animacao = ""

switch (largura){
    case largura >= 600:
        animacao = "aparecer_menu_fantasma_600 "
        break
    case largura >= 400:
        animacao = "aparecer_menu_fantasma "
        break
}

function aparecer_fantasma(){
    if(fantasma.style.display == "none"){
        fantasma.style.display = "flex"
        fantasma.style.animation = animacao + "0.5s"
        casca.style.display = "flex"
        casca.style.animation = "aparecer 1s"
        invisivel.style.display = "block"
        
    }else {
        fantasma.style.animation = "sumir_menu_fantasma 0.5s"
        casca.style.display = "none"
        setTimeout(()=>{
            fantasma.style.display = "none"
        },500)
        invisivel.style.display = "none"
    }
}
function sumir_fantasma () {
    fantasma.style.animation = "sumir_menu_fantasma 0.5s"
        casca.style.display = "none"
        setTimeout(()=>{
            fantasma.style.display = "none"
        },500)
        invisivel.style.display = "none"
}
