var mostrar001 = document.getElementById("resposta001")
var mostrar002 = document.getElementById("resposta002")
var mostrar003 = document.getElementById("resposta003")
var mostrar004 = document.getElementById("resposta004")

var resposta001 = document.getElementById("resp001")
var resposta002 = document.getElementById("resp002")
var resposta003 = document.getElementById("resp003")
var resposta004 = document.getElementById("resp004")

function mostrar_resposta (qual) {
    switch (qual) {
        case 1:
            resposta001.style.display = "block"
            mostrar001.style.display= "none"
            break
        case 2:
            resposta002.style.display = "block"
            mostrar002.style.display= "none"
            break
        case 3:
            resposta003.style.display = "block"
            mostrar003.style.display= "none"
            break
        case 4:
            resposta004.style.display = "block"
            mostrar004.style.display= "none"
            break
    }
}
