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
// cabeçalho.innerHTML += '<a href="#"></a>'

cabeçalho.innerHTML += '<a href="https://developerlucassouza.github.io/lixeiravirtual/paginas_techs/python/index.html">Python</a>'
cabeçalho.innerHTML += '<a href="https://developerlucassouza.github.io/lixeiravirtual/paginas_techs/html/index.html">HTML</a>'
// cabeçalho.innerHTML += '<a href="#">CSS</a>'
// cabeçalho.innerHTML += '<a href="#">JavaScript</a>'
// cabeçalho.innerHTML += '<a href="#">Node.js</a>'
// cabeçalho.innerHTML += '<a href="#">PHP</a>'
// cabeçalho.innerHTML += '<a href="#">C</a>'
// cabeçalho.innerHTML += '<a href="#">C++</a>'
// cabeçalho.innerHTML += '<a href="#">C#</a>'
// cabeçalho.innerHTML += '<a href="#">Java</a>'
// cabeçalho.innerHTML += '<a href="#">MySQL</a>'
// cabeçalho.innerHTML += '<a href="#">SQL_Server</a>'
// cabeçalho.innerHTML += '<a href="#">MongoDB</a>' 
// cabeçalho.innerHTML += '<a href="#">JQuery</a>'
// cabeçalho.innerHTML += '<a href="#">Bootstrap</a>'
// cabeçalho.innerHTML += '<a href="#">React</a>'
// cabeçalho.innerHTML += '<a href="#">Vue.js</a>'
// cabeçalho.innerHTML += '<a href="#">Angular</a>'
// cabeçalho.innerHTML += '<a href="#">TypeScript</a>'
// cabeçalho.innerHTML += '<a href="#">Ruby</a>'
// cabeçalho.innerHTML += '<a href="#">R</a>'
// cabeçalho.innerHTML += '<a href="#">Kotlin</a>'
// cabeçalho.innerHTML += '<a href="#">GO</a>'
// cabeçalho.innerHTML += '<a href="#">Swift</a>'
// cabeçalho.innerHTML += '<a href="#">Word</a>'
// cabeçalho.innerHTML += '<a href="#">Excel</a>'
// cabeçalho.innerHTML += '<a href="#">PowerPoint</a>'
// cabeçalho.innerHTML += '<a href="#">Hardware</a>'
// cabeçalho.innerHTML += '<a href="#">Redes</a>'


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

