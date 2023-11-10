<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Laço do while JS</h1>
            <p>O laço <code>do while</code> é uma estrutura de controle utilizada em programação para repetir um bloco de código enquanto uma condição específica permanece verdadeira. A peculiaridade do <code>do while</code> em relação a outras estruturas de repetição, como o <code><a href="while.php">while</a></code> tradicional, é que a verificação da condição ocorre no final do bloco de código, garantindo que o código dentro do bloco seja executado pelo menos uma vez, mesmo se a condição inicial já for falsa. Essa característica faz do <code>do while</code> uma escolha útil quando é necessário que um conjunto de instruções seja realizado antes de verificar a condição de continuidade. Ele oferece flexibilidade em situações em que a execução prévia de um bloco de código é essencial, independentemente da avaliação inicial da condição.</p>

            <div class="code">
                <pre>
do {
    <span class="comentario">// Bloco a ser repetido</span>   
} while (<em>condição</em>);</pre>
            </div>

            <hr>

            <p>Vamos usar o mesmo exemplo utilizado no <code><a href="while.php">while</a></code>, o código irá se repetir até o usuário digitar "S", mas dessa vez com laço <code>do-while</code>:</p>

            <div class="code">
                <pre>
do {
    resposta = prompt("Deseja interromper o laço? (S/N)");   
} while (resposta != "S");
alert("Laço interrompido");</pre>
            </div>

            <button class="btn btn-info ml-20" onclick="exemplo1()">Ver exemplo</button>

            <script type="text/javascript">
                function exemplo1() {
                    do {
                        resposta = prompt("Deseja interromper o laço? (S/N)");
                    } while (resposta != "S");
                    alert("Laço interrompido");
                }
            </script>

            <p>Veja que, no caso do <code>do while</code>, não foi preciso criar a variável antes do laço, pois o laço sempre será executado ao menos uma vez.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>