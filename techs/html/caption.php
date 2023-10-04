<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltcaption&gt HTML</h1>
        <p>A tag <code>caption</code> é usado em tabelas para criar um título (ou legenda) para a tabela, trazendo informações adicionais para se guiar a tabela. Ela deve ser colocada logo após a abertura do <code>table</code>.</p>

        <div class="code">
            <pre>
&lttable>
    &ltcaption>Exemplo de caption&lt/caption>   
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

    &lttr>
        &lttd>7&lt/td>
        &lttd>8&lt/td>
        &lttd>9&lt/td>
    &lt/tr>
&lt/table>
            </pre>
        </div>

        <table>
            <caption>Exemplo de caption</caption>
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

            <tr>
                <td>7</td>
                <td>8</td>
                <td>9</td>
            </tr>
        </table>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>