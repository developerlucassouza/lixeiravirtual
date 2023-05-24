var cabeça = document.querySelector('head')
var corpo = document.querySelector('body')
var cabeçalho = document.querySelector('header')
var principal = document.querySelector('main')

var itens = document.querySelector('div#itens')

// Importar icons do Google
cabeça.innerHTML += '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />'

// Criando cabeçalho
cabeçalho.innerHTML += '<a href="#">Python</a> <a href="#">HTML</a> <a href="#">CSS</a> <a href="#">JavaScript</a>'



//'<span class="material-symbols-outlined" id="burguer">menu</span> <a href="#">Python</a> <a href="#">HTML</a> <a href="#">CSS</a> <a href="#">JavaScript</a>'

var menuburguer = document.querySelector('span#burguer')

// Abrir e fechar menu hamburguer

function clickHamb() {
    if (itens.style.display == 'block') {
        itens.style.display = 'none'
    } else {
        itens.style.display = 'block'
    }
}
menuburguer.addEventListener('onclick', clickHamb)

corpo.addEventListener('onresize', mudouTamanho)
function mudouTamanho() {
    if (window.innerWidth >= 1000) {
        itens.style.display = 'block'
    } else {
        itens.style.display = 'none'
    }
}