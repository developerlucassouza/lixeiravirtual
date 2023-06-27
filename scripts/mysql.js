var pages = document.querySelector('div#itens')
var corpo = document.querySelector('body')

// Cor de Fundo das páginas
corpo.className = 'mysql'

// pages.innerHTML += '<a href="">MySQL</a>'

// Home
pages.innerHTML += '<a href="https://developerlucassouza.github.io/lixeiravirtual/">Lixeira Virtual</a>'
pages.innerHTML += '<a href="index.html">MySQL Home</a>'
pages.innerHTML += '<p>Comandos Básicos</p>'
pages.innerHTML += '<a href="">Instalação do MySQL com WAMP</a>'
pages.innerHTML += '<a href="">Instalação do MySQL com XAMPP</a>'
pages.innerHTML += '<a href="createdatabase.html">MySQL CREATE DATABASE</a>'
pages.innerHTML += '<a href="createtable.html">MySQL CREATE TABLE</a>'
pages.innerHTML += '<a href="tiposprimitivos.html">MySQL Tipos Primitivos</a>'
pages.innerHTML += '<a href="describle.html">MySQL DESCRIBE</a>'
pages.innerHTML += '<a href="drop.html">MySQL DROP</a>'
pages.innerHTML += '<a href="insertinto.html">MySQL INSERT INTO</a>'
pages.innerHTML += '<a href="altertable.html">MySQL ALTER TABLE</a>'
pages.innerHTML += '<a href="update.html">MySQL UPDATE</a>'
pages.innerHTML += '<a href="delete.html">MySQL DELETE</a>'
pages.innerHTML += '<a href="truncatetable.html">MySQL TRUNCATE TABLE</a>'
pages.innerHTML += '<a href="select.html">MySQL SELECT</a>'
pages.innerHTML += '<a href="selectorderby.html">MySQL SELECT ORDER BY</a>'
pages.innerHTML += '<a href="selectlike">MySQL SELECT LIKE</a>'
pages.innerHTML += '<a href="selectgroupby.html">MySQL SELECT GROUP BY</a>'
pages.innerHTML += '<a href="selectfuncoes.html">MySQL SELECT Funções</a>'
pages.innerHTML += '<a href="selecthaving.html">MySQL SELECT HAVING</a>'
pages.innerHTML += '<a href="chavesestrangeiras.html">MySQL Chaves Estrangeiras</a>'
pages.innerHTML += '<a href="addforeignkey.html">MySQL ADD FOREIGN KEY</a>'
pages.innerHTML += '<a href="innerjoin.html">MySQL INNER JOIN</a>'
pages.innerHTML += '<a href="leftouterjoin.html">MySQL LEFT OUTER JOIN</a>'















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