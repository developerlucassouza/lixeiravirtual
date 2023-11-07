<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Operador Ternário JS</h1>
            <p>O operador ternário, também conhecido como operador condicional, é um operador em muitas linguagens de programação que permite escrever uma expressão condicional de forma mais concisa. Em JavaScript, o operador ternário tem a seguinte sintaxe:</p>

            <div class="code">
                <pre><em>condição</em> ? <em>Valor se Verdadeiro</em> : <em>Valor se False</em>;   </pre>
            </div>

            <hr>

            <p>Vamos imaginar o seguinte código:</p>

            <div class="code">
                <pre>
if (x > 10) {
    let frase = "Maior que 10";
} else {
    let frase = "Não é maior que 10";
}</pre>
            </div>

            <p>Com o Operador Ternário, podemos simplificar essas cinco linhas para apenas uma.</p>

            <div class="code">
                <pre>let frase = (x > 10) ? "Maior que 10" : "Não é maior que 10";   </pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>