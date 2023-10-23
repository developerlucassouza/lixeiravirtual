<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>border-collapse CSS</h1>
        <p><code>border-collapse</code> é utilizado em Tabelas (ou seja, na tag <code><a href="../html/table.php">&lttable&gt</a></code>).</p>
        <p>Esta propriedade CSS define se bordas das células ficarão juntas (colapsadas) ou afastadas (separadas).</p>
        <p><code>border-collapse</code> tem apenas dois valores:</p>
        <p><code>separate</code> (padrão) para afastar as células.</p>
        <p><code>collpase</code> para unir as células</p>

        <div class="code">
            <pre>border-collapse: separate;</pre>
        </div>

        <div class="scrollx">
            <table style="border-collapse: separate;">
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                </tr>
            </table>
        </div>

        <div class="code">
            <pre>border-collapse: collapse;</pre>
        </div>

        <div class="scrollx">
            <table>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                </tr>
            </table>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>