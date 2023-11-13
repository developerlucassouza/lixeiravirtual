<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>break e continue JS</h1>
            <p>Em programação, <code>break</code> e <code>continue</code> são palavras-chave frequentemente usadas em estruturas de controle de fluxo, como loops.</p>

            <h2>break</h2>
            <p>O <code>break</code> é utilizado para sair imediatamente de um loop (como <code><a href="for.php">for</a></code>, <code><a href="while.php">while</a></code>, ou <code><a href="dowhile.php">do-while</a></code>) ou de uma estrutura condicional (switch) antes de sua conclusão normal.</p>
            <p>Quando o programa encontra a instrução <code>break</code>, ele interrompe a execução do loop ou da estrutura condicional e continua a execução do código fora do bloco do loop ou da estrutura condicional.</p>
            <p>O <code>break</code> é útil quando você deseja sair de um loop com base em uma condição específica, sem executar o restante das iterações.</p>
            <p>Exemplo:</p>
            <div class="code">
                <pre>
for (let i = 0; i < 5; i++) {
    if (i === 3) {
        break; <span class="comentario">// Sai do loop quando i é igual a 3</span>   
    }
    console.log(i);
}</pre>
            </div>

            <hr>


            <h2>continue</h2>
            <p>O <code>continue</code> é utilizado para pular a iteração atual de um loop e ir para a próxima iteração.</p>
            <p>Quando o programa encontra a instrução <code>continue</code>, ele ignora o código restante no bloco do loop para a iteração atual e continua com a próxima iteração.</p>
            <p>O <code>continue</code> é útil quando você deseja pular parte do código em uma iteração específica, mas continuar com as iterações subsequentes.</p>
            <p>Exemplo:</p>

            <div class="code">
                <pre>
for (let i = 0; i < 5; i++) {
    if (i === 2) {
        continue; <span class="comentario">// Pula a iteração quando i é igual a 2</span>   
    }
    console.log(i);
}</pre>
            </div>


        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>