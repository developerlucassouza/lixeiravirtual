<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltcolgroup&gt HTML</h1>
        <p>A tag <code>colgroup</code> é utilizada para representar grupos de colunas em tabelas. Dentro de um <code>colgroup</code> haverá várias tags <code><a href="col.php">&ltcol&gt</a></code>, onde cada tag irá representar uma coluna. <code>colgroup</code> não possui nenhum estilo padrão.</p>

        <div class="code">
            <pre>
&lttable style="margin-left:20px;">   
    &ltcolgroup>
        &ltcol class="coluna1">
        &ltcol class="coluna2">
        &ltcol class="coluna3">
    &lt/colgroup>

    &lttr>
        &lttd>1&lt/td>
        &lttd>2&lt/td>
        &lttd>3&lt/td>
    &lt/tr>

    &lttr>
        &lttd>4&lt/td>
        &lttd>5&lt/td>
        &lttd>6&lt/td>
    &lt/tr>
&lt/table></pre>
        </div>

        <table style="margin-left:20px;">

            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>

            <tr>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
        </table>

        <p>Para explorar melhor o <code>colgroup</code>, veja também a tag <code><a href="col.php">&ltcol&gt</a></code>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>