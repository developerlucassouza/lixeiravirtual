<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &lttable&gt HTML</h1>
        <p>A tag <code>table</code> é utilizada para a criação de tabelas em HTML.</p>
        <p>Para criar tabelas, outras tags deverão ser utilizadas. As mais básicas são:</p>
        <p><code><a href="tr.html">&lttr&gt</a></code> para a criação de linhas.</p>
        <p><code><a href="td.html">&lttd&gt</a></code> para inserção de dados.</p>
        <p><code><a href="th.html">&ltth&gt</a></code> para criação de cabeçalhos.</p>

        <div class="code">
            <pre>
&lttable>
    &lttr>
        &ltth>Nome&lt/th>
        &ltth>Idade&lt/th>
        &ltth>Profissão&lt/th>
    &lt/tr>
    &lttr>
        &lttd>Fábio&lt/td>
        &lttd>30&lt/td>
        &lttd>Programador&lt/td>
    &lt/tr>
    &lttr>
        &lttd>Jéssica&lt/td>
        &lttd>24&lt/td>
        &lttd>Veterinária&lt/td>   
    &lt/tr>
&lt/table></pre>
        </div>

        <hr>

        <h2>Estilização das Tabelas</h2>
        <p>Por si só, nenhuma das tags possui estilos, então será preciso adicionar algumas <code><a href="../css/index.html">CSS</a></code> para melhor visualização da tabela.</p>
        <p>Alguns estilos básicos que irão ajudar: (copie dentro da tag <code><a href="head.html">&lthead&gt</a></code> do seu documento).</p>

        <div class="code">
            <pre>
&ltstyle&gt
    table {
        border-collapse: collapse;   
    }

    td {
        border: 1px solid black;
        padding: 10px;
    }
&lt/style&gt</pre>
        </div>

        <p>Algumas outras tags como <code><a href="thead.html">&ltthead&gt</a></code>, <code><a href="tbody.html">&lttbody&gt</a></code>, <code><a href="tfoot.html">&lttfoot&gt</a></code> podem ajudar na melhor estruturação de uma tabela.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>