var pages = document.querySelector('div#itens')

// pages.innerHTML += '<a href="">Python</a>'

// Home
pages.innerHTML += '<a href="https://developerlucassouza.github.io/lixeiravirtual/">Lixeira Virtual</a>'
pages.innerHTML += '<a href="index.html">Python Home</a>'

// Python Básico
pages.innerHTML += '<p>Python Básico</p>'
pages.innerHTML += '<a href="">Instalação do Python</a>'
pages.innerHTML += '<a href="">Python Output</a>'
pages.innerHTML += '<a href="">Python Variáveis</a>'
pages.innerHTML += '<a href="">Python Tipos Primitivos</a>'
pages.innerHTML += '<a href="">Python Input</a>'
pages.innerHTML += '<a href="">Python Manipulação de Strings</a>'
pages.innerHTML += '<a href="">Python Cores</a>'
pages.innerHTML += '<a href="">Python Operadores Aritméticos</a>'
pages.innerHTML += '<a href="">Python Operadores Relacionais</a>'
pages.innerHTML += '<a href="">Python Operadores Lógicos</a>'
pages.innerHTML += '<a href="">Python Condicional if/else</a>'
pages.innerHTML += '<a href="">Python Condicional elif</a>'
pages.innerHTML += '<a href="">Python Random.Randint</a>'
pages.innerHTML += '<a href="">Python Time.Sleep</a>'
pages.innerHTML += '<a href="">Python Laço for</a>'
pages.innerHTML += '<a href="">Python Laço while</a>'
pages.innerHTML += '<a href="">Python break e continue</a>'
pages.innerHTML += '<a href="">Python Sons</a>'
pages.innerHTML += '<a href="">Python Tuplas</a>'
pages.innerHTML += '<a href="">Python Listas</a>'
pages.innerHTML += '<a href="">Python Dicionários</a>'
pages.innerHTML += '<a href="">Python Funções</a>'
pages.innerHTML += '<a href="">Python Tratamento de Erros</a>'














// Obtém a URL atual
var url = new URL(window.location.href);

// Obtém o pathname da URL
var pathname = url.pathname;

// Separa o pathname em partes usando o caractere '/'
var partes = pathname.split('/');

// Obtém a última parte do pathname (parte final da URL)
url = partes[partes.length - 1];

// Avaliar href de cada tag e se ela é igual o arquivo atual
for (var ancora of document.querySelectorAll('div#itens a')) {
    var href = ancora.getAttribute('href')
    if (href === url) {
        ancora.className = 'ativo';
    }
}