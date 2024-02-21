
var roupa = document.querySelectorAll(".roupa")
var produto = document.querySelectorAll(".produto")

function adicionar (roupas, caminho){
    roupas.forEach(function(elemento) {
        elemento.addEventListener('click', function() {
            window.location.href = caminho;
        });
  });
}

adicionar(roupa, '../paginas/exclusivo.html');
adicionar(produto, '../paginas/exclusivo.html')
