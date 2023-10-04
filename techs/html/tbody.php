<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &lttbody&gt HTML</h1>
        <p>A tag <code>tbody</code> é utilizada para criar o corpo de uma tabela (<code><a href="table.html">&lttable&gt</a></code>) inserindo os dados principais (<code><a href="tr.html">&lttr&gt</a></code> e <code><a href="td.html">&lttd&gt</a></code>).</p>

        <div class="code">
            <pre>
&lttable>
    &ltthead>
        [...]
    &lt/thead>

    &lttbody>
        &lttr>
            &lttd>Item 1&lt/td>   
            &lttd>Item 2&lt/td>
            &lttd>Item 3&lt/td>
        &lt/tr>

        &lttr>
            &lttd>Item 4&lt/td>
            &lttd>Item 5&lt/td>
            &lttd>Item 6&lt/td>
        &lt/tr>
    &lt/tbody>

    &lttfoot>
        [...]
    &lt/tfoot>
&lt/table></pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>