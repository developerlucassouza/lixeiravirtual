// --- Definindo variáveis
var cabeça = document.querySelector('head')
var corpo = document.querySelector('body')
var cabeçalho = document.querySelector('header')
var principal = document.querySelector('main')
var menuburguer = document.querySelector('span#burguer')
var itens = document.querySelector('div#itens')

// ======================================================================================================================================

// --- Adicionando link para voltar ao menu
// itens.innerHTML += '<a href="https://developerlucassouza.github.io/lixeiravirtual/">Lixeira Virtual</a>'

// --- Icone de menu hamburguer
// <span class="material-symbols-outlined" id="burguer">menu</span>

// ======================================================================================================================================

// --- Importar icons do Google
cabeça.innerHTML += '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>'

// --- Criando cabeçalho
cabeçalho.innerHTML += ' <a href="https://developerlucassouza.github.io/lixeiravirtual/paginas_techs/html/index.html">HTML</a> '
//<a href="#">Python</a> <a href="#">CSS</a> <a href="#">JavaScript</a> <a href="#">PHP</a> <a href="#">C</a> <a href="#">C++</a> <a href="#">C#</a> <a href="#">MySQL</a>

// ======================================================================================================================================

// --- Abrir e fechar menu hamburguer
menuburguer.addEventListener('onclick', clickHamb)
function clickHamb() {
    if (itens.style.display == 'inline-block') {
        itens.style.display = 'none'
    } else {
        itens.style.display = 'inline-block'
    }
}

// --- Responsividade no menu hamburguer
corpo.addEventListener('onresize', mudouTamanho)
function mudouTamanho() {
    if (window.innerWidth >= 1000) {
        itens.style.display = 'block'
    } else {
        itens.style.display = 'none'
    }
}

