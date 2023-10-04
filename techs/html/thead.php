<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltthead&gt HTML</h1>
        <p>A tag <code>thead</code> é utilizada para criar o cabeçalho de uma tabela (<code><a href="table.php">&lttable&gt</a></code>).</p>
        <p>É recomendado criar as células no <code>thead</code> com a tag <code><a href="th.php">&ltth&gt</a></code>.</p>

        <div class="code">
            <pre>
&lttable>
    &ltthead>
        &ltth>Nome&lt/th>
        &ltth>Idade&lt/th>
        &ltth>Profissão&lt/th>   
    &lt/thead>

    &lttbody>
        [...]
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