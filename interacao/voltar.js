
const caminho = window.referrer
var botao = document.getElementById("voltar")

if(caminho != true){
    botao.style.display = "none"
}

function voltar_pag_anterior (){
    if (caminho){
        window.location.href = caminho
    }else {
        window.alert('esta é a sua primeira pagina, nao tem como voltar')
    }
}