
function transferir (caminho) {
    window.location.href = caminho
}

function menu () {
    var icone_menu = document.getElementById("menu")
    var casca_menu = document.getElementById("casca_menu")
    var interior = document.getElementById("interior")
    if(icone_menu.style.display != "none"){
        icone_menu.style.display = "none"
        casca_menu.style.display = "flex"
        interior.style.display = "block"
    }else {
        icone_menu.style.display = "block"
        casca_menu.style.display = "none"
        interior.style.display = "none"
    }
}

function lista_menu(qual) {
    if(qual == 0){
        console.log("vc quer voltar para o home")
        transferir("index.html")
    }if(qual == 1){
        console.log("vc quer uma camisa :)")
    }if(qual == 2){
        console.log("vc quer uma moleton :)")
    }if(qual == 3){
        console.log("vc quer uma regata :)")
    }if(qual == 4){
        console.log("vc quer um bone :)")
    }if(qual == 5){
        console.log("vc quer criar a sua :)")
    }
}