<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltnav&gt HTML</h1>
        <p>A tag <code>nav</code> é uma tag semântica para indicar um local de navegação, ou seja, uma seção com tags <code><a href="a.html">&lta&gt</a></code> que leva para outras páginas do site.</p>
        <p>A tag <code>nav</code> tem apenas função semântica, então não possue estilo padrão.</p>

        <div class="code">
            <pre>
&ltnav>
    &lta href="[...]">Link 1&lt/a>
    &lta href="[...]">Link 2&lt/a>   
    &lta href="[...]">Link 3&lt/a>
&lt/nav></pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>