<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>animation-delay CSS</h1>
        <p>Esta propriedade é utilizada em favor de animações criadas com o <code><a href="keyframes.php">@keyframes</a></code>.</p>
        <p>O <code>animation-delay</code> irá gerar uma pausa antes do inicio da animação, permitindo controlar quando a animação deve começar após o elemento ser carregado ou após algum evento.</p>
        <p>O valor pode ser em segundos (s) ou milissegundos (ms).</p>

        <div class="code">
            <pre>
.elemento {
    animation: [...];
    animation-delay: 2s;
}</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>