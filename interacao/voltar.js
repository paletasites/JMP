
const caminho = window.referrer
var botao = document.getElementById("voltar")
var onde_ir = document.getElementById("botao_vai_aqui")

const botao_voltar = `
<div class="botao_voltar" id="voltar" onclick="voltar_pag_anterior()"><img src="../midia/icones/voltar.png" alt=""></div>
`

if(caminho != true){
    botao.style.display = "none"
}else {
    onde_ir.innerHTML += botao_voltar
}

function voltar_pag_anterior (){
    if (caminho){
        window.location.href = caminho
    }else {
        window.alert('esta é a sua primeira pagina, nao tem como voltar')
    }
}