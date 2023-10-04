<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &lttfoot&gt HTML</h1>
        <p>A tag <code>tfoot</code> é utilizada para criar o rodapé de uma tabela (<code><a href="table.php">&lttable&gt</a></code>), isto é, a parte final da tabela.</p>

        <div class="code">
            <pre>
&lttable>
    &ltthead>
        [...]
    &lt/thead>

    &lttbody>
        [...]
    &lt/tbody>

    &lttfoot>
        &lttr>
            &ltth>Total&lt/th>
            &lttd>100.000&lt/td>   
        &lt/tr>
    &lt/tfoot>
&lt/table></pre>
        </div>

        <p>Tal tag deve ser usada em conjunto das tags <code><a href="thead.php">&ltthead&gt</a></code> e <code><a href="tbody.php">&lttbody&gt</a></code>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>