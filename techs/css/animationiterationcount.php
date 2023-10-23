<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>animation-iteration-count CSS</h1>
        <p>O <code>animation-iteration-count</code> é uma propriedade de animações criadas com <code><a href="keyframes.php">@keyframes</a></code>.</p>
        <p>Esta propriedade irá indicar quantas vezes a animação irá acontecer/se repetir.</p>

        <div class="code">
            <pre>
.elemento {
    [...]
    animation-iteration-count: 3;   
}</pre>
        </div>

        <p>Neste exemplo, a animação irá se repetir 3 vezes.</p>
        <p>O valor padrão do <code>animation-iteration-count</code> é 1.</p>

        <hr>

        <p>Também pode-se utilizar o valor <code>infinite</code>, para fazer a animação repetir infinitamente.</p>

        <div class="code">
            <pre>
.elemento {
    [...]
    animation-iteration-count: infinite;   
}</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>