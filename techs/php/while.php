<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Laço while PHP</h1>
            <p>Em programação, o laço <code>while</code> é uma estrutura de controle que permite a repetição de um bloco de código enquanto uma condição específica for verdadeira. Ele atua como um guardião, garantindo que o conjunto de instruções dentro do bloco seja executado repetidamente até que a condição associada seja avaliada como falsa. Essa estrutura é valiosa para implementar iterações dinâmicas, onde a quantidade de repetições não é conhecida antecipadamente. O <code>while</code> oferece flexibilidade e é amplamente utilizado em linguagens de programação para criar loops eficientes e adaptáveis, permitindo que um programa execute tarefas de forma contínua até que uma condição de parada seja atendida.</p>

            <div class="code">
                <pre>
while (<em>condição</em>) {
    <span class="comentario">// Bloco a ser repetido</span>   
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>