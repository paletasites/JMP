
function mudar_cor(cor){

    const quadro_fundo = document.getElementById("quadro_fundo")
    const produto = document.getElementById("imagem")

    let vermelho = "red"
    let azul = "#22acf6"
    let amarelo = "#ffe312"
    let rosa = "#f772f3"
    let branco = "white"
    let preto = "black"

    switch (cor){
        case "vermelho":
            quadro_fundo.style.backgroundColor = vermelho
            produto.style.animation = "aparecer_produto 1s"
            break
        case "azul":
            quadro_fundo.style.backgroundColor = azul
            produto.style.animation = "aparecer_produto 1s"
            break
        case "amarelo":
            quadro_fundo.style.backgroundColor = amarelo
            produto.style.animation = "aparecer_produto 1s"
            break
        case "rosa":
            quadro_fundo.style.backgroundColor = rosa
            produto.style.animation = "aparecer_produto 1s"
            break
        case "branco":
            quadro_fundo.style.backgroundColor = branco
            produto.style.animation = "aparecer_produto 1s"
            break
        case "preto":
            quadro_fundo.style.backgroundColor = preto
            produto.style.animation = "aparecer_produto 1s"
            break
    }
}

function tamanho (tamanho){

    var pp = document.getElementById("pp")
    var p = document.getElementById("p")
    var m = document.getElementById("m")
    var g = document.getElementById("g")
    var gg = document.getElementById("gg")

    pp.style.backgroundColor = "white"
    p.style.backgroundColor = "white"
    m.style.backgroundColor = "white"
    g.style.backgroundColor = "white"
    gg.style.backgroundColor = "white"
    
    switch (tamanho){
        case "PP":
            pp.style.backgroundColor = "#d1d1d1"
            break
        case "P":
            p.style.backgroundColor = "#d1d1d1"
            break
        case "M":
            m.style.backgroundColor = "#d1d1d1"
            break
        case "G":
            g.style.backgroundColor = "#d1d1d1"
            break
        case "GG":
            gg.style.backgroundColor = "#d1d1d1"
            break
    }

}

