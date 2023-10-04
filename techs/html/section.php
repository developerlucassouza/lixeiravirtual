<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltsection&gt HTML</h1>
        <p>A tag <code>section</code> é uma tag semântica que indica uma seção ou área de conteúdo do documento HTML. É utilizada para criar agrupamentos semelhantes ao <code><a href="div.php">&ltdiv&gt</a></code>.</p>
        <p>Por ser uma tag apenas de semântica, não possui estilo próprio.</p>

        <div class="code">
            <pre>
&ltsection&gt
    &lth1&gtSeção&lt/h1&gt
    &ltp&gtEssa é uma seção.&lt/p&gt   
&lt/section&gt</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>