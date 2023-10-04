<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltq&gt HTML</h1>
        <p>A tag <code>q</code> é utilizada para criar citações.</p>

        <div class="code">
            <pre>
&ltp&gtComo diria Descartes: &ltq&gtPenso, logo existo!&lt/q&gt.&lt/p&gt   </pre>
        </div>

        <p>Como diria Descartes: <q>Penso, logo existo</q>.</p>

        <p>Perceba também que as aspas são colocadas automaticamente.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>