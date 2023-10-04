<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &lttd&gt HTML</h1>
        <p>A tag <code>td</code> é utilizada para inserir dados em uma tabela (<code><a href="table.php">&lttable&gt</a></code>) </p>
        <p>Tags <code>td</code> devem ser colocados dentro de uma tag <code><a href="tr.php">&lttr&gt</a></code>, tag que indica uma linha da tabela.</p>

        <div class="code">
            <pre>
&lttable>
    &lttr>
        &lttd>A1&lt/td>   
        &lttd>B1&lt/td>
        &lttd>C1&lt/td>
    &lt/tr>

    &lttr>
        &lttd>A2&lt/td>
        &lttd>B2&lt/td>
        &lttd>C2&lt/td>
    &lt/tr>
&lt/table></pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>