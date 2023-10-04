<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltth&gt HTML</h1>
        <p>A tag <code>th</code> é utilizada para criar uma célula de cabeçalho em uma tabela (<code><a href="table.html">&lttable&gt</a></code>)</p>

        <div class="code">
            <pre>
&lttable>
    &lttr>
        &ltth>Coluna 1&lt/th>   
        &ltth>Coluna 2&lt/th>
        &ltth>Coluna 3&lt/th>
    &lt/tr>

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