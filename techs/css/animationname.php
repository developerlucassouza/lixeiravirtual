<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>animation-name CSS</h1>
        <p>A propriedade <code>animation-name</code> é utilizada para atribuir uma animação <code><a href="keyframes.php">@keyframes</a></code> a um elemnto <code><a href="../html/index.php">HTML</a></code>.</p>

        <div class="code">
            <pre>
@keyframes minhaAnimacao {
    from {background-color: red;}
    to {background-color: blue;}
}

.elemento {
    animation-name: minhaAnimacao;   
    animation-duration: 3s;
}</pre>
        </div>

        <p>Dessa forma, o elemento passa a receber a animação criada anteriormente.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>