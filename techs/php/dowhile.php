<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Laço do while PHP</h1>
            <p>O laço <code>do while</code> é uma estrutura de controle utilizada em programação para repetir um bloco de código enquanto uma condição específica permanece verdadeira. A peculiaridade do <code>do while</code> em relação a outras estruturas de repetição, como o <code>while</code> tradicional, é que a verificação da condição ocorre no final do bloco de código, garantindo que o código dentro do bloco seja executado pelo menos uma vez, mesmo se a condição inicial já for falsa. Essa característica faz do do while uma escolha útil quando é necessário que um conjunto de instruções seja realizado antes de verificar a condição de continuidade. Ele oferece flexibilidade em situações em que a execução prévia de um bloco de código é essencial, independentemente da avaliação inicial da condição.</p>

            <div class="code">
                <pre>
do {
    <span class="comentario">// Bloco a ser repetido</span>   
} while (<em>condição</em>);</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>