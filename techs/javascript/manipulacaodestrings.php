<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Manipulação de Strings JS</h1>
            <p>Manipulação de strings refere-se à aplicação de operações ou transformações em cadeias de caracteres (strings). Uma string é uma sequência de caracteres, como texto ou palavras. A manipulação de strings é uma parte fundamental da programação, pois muitas vezes você precisa trabalhar com dados de texto e realizar diversas operações neles.</p>

            <p>A manipulação de strings em JavaScript pode ser feita usando uma variedade de métodos. Aqui estão alguns dos métodos mais comuns:</p>



            <h2>Concatenação</h2>
            <p>A concatenação é a junção de duas <code>strings</code>, formando uma nova <code>string</code>.</p>
            <p>A concatenação nas <code>strings</code> é feita com o sinal de adição (<code>+</code>).</p>
            <div class="code">
                <pre>
let str1 = "Hello";
let str2 = "World";
let result = str1 + " " + str2;   
<span class="comentario">// Resultado: "Hello World"</span></pre>
            </div>



            <h2>Comprimento da String</h2>
            <p>A propriedade <code>.length</code> retorna a quantidade de caracteres que uma <code>string</code> possue.</p>
            <div class="code">
                <pre>
let str = "JavaScript";
let length = str.length;
<span class="comentario">// Resultado: 10</span></pre>
            </div>



            <h2>Acesso a Caracteres</h2>
            <p>Podemos acessar caracteres separadamente, utilizando os colchetes <code>[]</code> no final da variável com a <code>string</code>, dentro tendo a posição que deseja ver.</p>
            <p>(Lembrando que uma <code>string</code> começa na posição 0)</p>
            <div class="code">
                <pre>
let str = "Hello";
let firstChar = str[0];
<span class="comentario">// Resultado: "H"</span></pre>
            </div>



            <h2>Método slice()</h2>
            <p>O método <code>slice()</code> irá resultar uma <code>substring</code> baseado em uma <code>string</code> já existente, indicando a posição de inicio e a posição final.</p>
            <p>(Lembrando que o último caracter não será mostrado).</p>
            <div class="code">
                <pre>
let str = "JavaScript";
let sliced = str.slice(0, 4);
<span class="comentario">// Resultado: "Java"</span></pre>
            </div>



            <h2>Localizar Substrings</h2>
            <p>Com o método <code>.indexOf()</code> você pode pesquisar uma <code>substring</code>, retornando a posição em que ela começa.</p>
            <p>(Caso não exista esta <code>substring</code>, será retornado -1;</p>
            <div class="code">
                <pre>
let str = "Hello World";

let index = str.indexOf("World");
<span class="comentario">// Resultado: 6</span></pre>

let index2 = str.indexOf("JavaScript");
<span class="comentario">// Resultado: -1</span></pre>
            </div>



            <h2>Substituição</h2>
            <p>O método <code>.replace()</code> permite substituir uma <code>substring</code> por uma nova.</p>
            <div class="code">
                <pre>
let str = "Hello World";
let newStr = str.replace("World", "JavaScript");
<span class="comentario">// Resultado: "Hello JavaScript"</span></pre>
            </div>



            <h2>Transformação de Maiúsculas e Minúsculas</h2>
            <p>Os métodos <code>.toUpperCase()</code> e <code>.toLowerCase()</code> irão, respectivamente, transformar todas as letras em maiúsculas e minúsculas.</p>
            <div class="code">
                <pre>
let str = "JavaScript";

let upperCase = str.toUpperCase();
<span class="comentario">// Resultado: "JAVASCRIPT"</span>

let lowerCase = str.toLowerCase();
<span class="comentario">// Resultado: "javascript"</span></pre>
            </div>



            <h2>Remoção de Espaços em Branco</h2>
            <p>Com o método <code>.trim()</code>, será removido todos os espaços em branco do início e do fim da <code>string</code>.</p>
            <div class="code">
                <pre>
let str = "   Trim me!   ";
let trimmed = str.trim();
<span class="comentario">// Resultado: "Trim me!"</span></pre>
            </div>



        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>