<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltspan&gt HTML</h1>
        <p>A tag <code>span</code> é uma tag de agrupamento semelhante a <code><a href="div.php">&ltdiv&gt</a></code> com a diferença de que <code><a href="div.php">&ltdiv&gt</a></code> é uma tag <code>block</code>, enquanto <code>span</code> é uma tag <code>inline</code>.</p>
        <p>Por ser uma tag de agrupamento, não possui estilo prórpio.</p>

        <div class="code">
            <pre>
&ltp&gtEsse parágrafo possui &ltspan&gt uma tag span &lt/span&gt &lt/p&gt   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>