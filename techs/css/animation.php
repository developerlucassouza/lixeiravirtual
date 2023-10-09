<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>animation CSS</h1>
        <p>O <code>animation</code> é utilizado para carregar animações criadas através do <code><a href="keyframes.php">@keyframes</a></code>.</p>

        <div class="code">
            <pre>
<span class="comentario">/* Criando a Animação */</span>
@keyframes cores {
    from {background-color: red;}
    to {background-color: blue;}
}</pre>
        </div>

        <div class="code">
            <pre>
<span class="comentario">/* Aplicando a Animação em um Elemento */</span>
.elemento {
    animation: cores 2s;
}</pre>
        </div>

        <hr>

        <p>O <code>animation</code> é uma <em>shorthand</em>, isto é, possue vários valores que podem ser declarados separadamente.</p>

        <p>Os valores do <code>animation</code> são, respectivamente:</p>

        <p><code><a href="animationname.php">animation-name</a></code>: Nome da animação criado no <code><a href="keyframes.php">@keyframes</a></code> (no caso, cores).</p>

        <p><code><a href="animationduration.php">animation-duration</a></code>: Duração da animação contando em segundos (s) ou milissegundos (ms).</p>

        <p><code><a href="animationtimingfunction.php">animation-timing-function</a></code>: Suavização da animação (como 'ease', 'linear' e 'ease-in-out').</p>

        <p><code><a href="animationdelay.php">animation-delay</a></code>: Tempo de espera antes do início da animação em segundos (s) ou milissegundos (ms).</p>

        <p><code><a href="animationiterationcount.php">animation-iteration-count</a></code>: O número de vezes que a animação será repetida. Coloque <code>infinite</code> para uma repetição infinita.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>