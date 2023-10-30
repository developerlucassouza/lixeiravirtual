<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Variáveis JS</h1>
            <p>Uma variável em programação é um nome simbólico associado a um valor ou expressão. Essencialmente, é um local de armazenamento com um nome simbólico (um identificador) que contém algum dado que pode ser modificado durante a execução de um programa.</p>
            <p>As variáveis são fundamentais para a programação porque permitem que os programadores armazenem e manipulem dados de forma dinâmica. Cada variável possui um tipo de dado, que pode ser um número, uma string (sequência de caracteres), um objeto, uma função, entre outros.</p>

            <p>Podemos criar variáveis utilizando a palavra <code>var</code>, e constantes utilizando a palavra <code>const</code>.</p>

            <div class="code">
                <pre>
var nome = 'Ryan';
const PI = 3.1415;   </pre>
            </div>

            <p>A diferença é que constantes não podem ser redefinidas, já as variáveis, sim.</p>

            <hr>

            <p>Podemos utilizar o <code><a href="output.php">console.log()</a></code> para exibir as variáveis:</p>

            <div class="code">
                <pre>
var nome = 'Paulo';
console.log(nome);   </pre>
            </div>

            <div class="output">
                <pre>Paulo</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>