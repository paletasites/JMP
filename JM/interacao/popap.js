
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

