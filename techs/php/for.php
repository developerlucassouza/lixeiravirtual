<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Laço for PHP</h1>
            <p>O laço <code>for</code> é uma estrutura fundamental em programação, utilizada para repetir um bloco de código várias vezes. Ele geralmente é composto por três partes: a inicialização, a condição de continuação e a expressão de incremento. A inicialização ocorre apenas uma vez no início, estabelecendo a variável de controle. A condição de continuação é verificada a cada iteração e determina se o laço continua ou termina. A expressão de incremento é executada após cada iteração e é responsável por atualizar a variável de controle. Essa estrutura oferece uma maneira eficiente e organizada de executar tarefas repetitivas, como percorrer uma lista de elementos ou realizar cálculos iterativos.</p>

            <div class="code">
                <pre>
for (<em>inicialização</em>; <em>condição</em>; <em>incremento</em>) {
    <span class="comentario">// Bloco a ser repetido</span>
}</pre>
            </div>

            <p>A inicialização irá criar a variável de controle.</p>
            <p>A condição é utilizada para definir em qual situação o laço continuará a se repetir.</p>
            <p>O incremento irá incrementar a variável de controle.</p>

            <hr>

            <p>No exemplo abaixo, será executado um <code>echo</code> 10 vezes.</p>

            <div class="code">
                <pre>
for ($i = 0; $i < 10; $i++) {   
    echo 'Olá, Mundo!';
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>