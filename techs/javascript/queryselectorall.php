<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS "para cada elemento"</h1>

            <p>Juntando o laço de repetição <code><a href="for.php">for</a></code> com o seletor <code>querySelectorAll</code>, podemos repetir um determinado trecho baseado na quantidade de elementos iguais possuimos.</p>
            <p>No exemplo abaixo, o laço irá se repetir a mesma quantidade de vezes que a tag p é encontrada. Se ouver 10 tags p, o laço se repetirá 10 vezes.</p>

            <div class="code">
                <pre>
let elementos = document.querySelectorAll('p');   

for (let i = 0; i < elementos.length; i++) {
    ...
}</pre>
            </div>

            <hr>

            <p>Com isso, podemos analisar os atributos de cada tag. Por exemplo, se o href de um link for igual a página atual, adicionar uma classe ao mesmo:</p>

            <div class="code">
                <pre>
let urlAtual = 'pagina.html';

for (let ancora of document.querySelectorAll('a')) {   
    if (ancora.href == urlAtual) {
        ancora.className = 'atual';
    }
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>