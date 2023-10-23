<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>animation-duration CSS</h1>
        <p>A propriedade <code>animation-duration</code> define a duração de uma animação criada com <code><a href="keyframes.php">@keyframes</a></code>.</p>
        <p>A duração pode ser definida em segundos (<code>s</code>) ou milissegundos (<code>ms</code>).</p>

        <div class="code">
            <pre>
.elemento {
    [...]
    animation-duration: 2s;   
}</pre>
        </div>

        <div class="code">
            <pre>
.elemento {
    [...]
    animation-duration: 1987ms;   
}</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>