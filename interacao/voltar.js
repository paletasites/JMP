
const caminho = window.referrer
var onde_ir = document.getElementById("bodi")

const botao_voltar = `
<div class="botao_voltar" id="voltar" onclick="voltar_pag_anterior()"><img src="../midia/icones/voltar.png" alt=""></div>
`
onde_ir.innerHTML += botao_voltar
var botao = document.getElementById("voltar")

function voltar_pag_anterior (){
    if (caminho){
        window.location.href = caminho
    }else {
        window.alert('esta é a sua primeira pagina, nao tem como voltar')
    }
}