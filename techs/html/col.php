<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltcol&gt HTML</h1>
        <p>A tag <code>col</code> é usada junto da tag <code><a href="colgroup.php">&ltcolgroup></a></code> em tabelas, a fim de agrupar cada coluna e atribuir uma class para a mesma. Tal tag não possui nenhum estilo em particular.
        </p>

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

        <hr>

        <p>Com as colunas agrupadas e classes atribuidas, pode-se estilizar cada coluna individualmente utilizando <a href="../css/">CSS</a>.</p>

        <div class="code">
            <pre>
&ltstyle&gt
    col.coluna1 {
        background-color: red; 
    }

    col.coluna2 {
        background-color: green;
    }

    col.coluna3 {
        background-color: blue;
    }
&lt/style&gt</pre>
        </div>

        <style>
            col.coluna1 {
                background-color: rgb(200, 0, 0); 
            }

            col.coluna2 {
                background-color: rgb(0, 200, 0);
            }

            col.coluna3 {
                background-color: rgb(0, 0, 200);
            }
        </style>

        <table style="margin-left:20px;">
            <colgroup>
                <col class="coluna1">
                <col class="coluna2">
                <col class="coluna3">
            </colgroup>

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
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>