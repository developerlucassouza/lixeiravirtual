<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &lttitle&gt HTML</h1>
        <p>A tag <code>title</code> é utilizada para definir o título do documento HTML.</p>
        <p>Ela é útil principalmente para indexação de páginas no Google, pois o título é o que irá aparecer nas pesquisas do Google.</p>
        <p><code>title</code> é colocada dentro da tag <code><a href="head.html">&lthead&gt</a></code></p>

        <div class="code">
            <pre>
&lthead&gt
    [...]
    &lttitle&gtTítulo do Documento&lt/title&gt   
&lt/head&gt</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>