<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>align-items CSS</h1>
        <p><code>align-items</code> é utilizada para configurar o alinhamento vertical de elementos dentro de um contêiner flexível (<code><a href="display.php">display</a>: flex;</code>).</p>
        <p>Para cada valor de <code>align-items</code>, vamos considerar o seguinte <code><a href="../html/index.php">HTML</a></code>:</p>

        <div class="code">
            <pre>
&ltdiv class="container">
    &ltdiv class="item">Item 1&lt/div>   
    &ltdiv class="item">Item 2&lt/div>
&lt/div></pre>
        </div>

        <hr>
        <h2>align-items: flex-start;</h2>
        <p>Os itens serão alinhados no topo do contêiner</p>
        <div class="code">
            <pre>
.container {
    display: flex;
    align-items: flex-start;   
}</pre>
        </div>
        <div class="cont" style="align-items: flex-start;">
            <div class="item">Item 1</div>
            <div class="item">Item 2</div>
        </div>

        <hr>
        <h2>align-items: flex-end;</h2>
        <p>Os itens serão alinhados no final do contêiner, abaixo.</p>
        <div class="code">
            <pre>
.container {
    display: flex;
    align-items: flex-end;   
}</pre>
        </div>
        <div class="cont" style="align-items: flex-end;">
            <div class="item">Item 1</div>
            <div class="item">Item 2</div>
        </div>

        <hr>
        <h2>align-items: center;</h2>
        <p>Os itens serão alinhados no centro, verticalmente.</p>
        <div class="code">
            <pre>
.container {
    display: flex;
    align-items: center;   
}</pre>
        </div>
        <div class="cont" style="align-items: center;">
            <div class="item">Item 1</div>
            <div class="item">Item 2</div>
        </div>

        <hr>
        <h2>align-items: baseline;</h2>
        <p>Os itens serão alinhados a partir da linha base do texto.</p>
        <div class="code">
            <pre>
.container {
    display: flex;
    align-items: baseline;   
}</pre>
        </div>
        <div class="cont" style="align-items: baseline;">
            <div class="item">Item 1</div>
            <div class="item">Item 2</div>
        </div>

        <hr>
        <h2>align-items: stretch;</h2>
        <p>Os itens serão esticados para preencher todo o espaço vertical disponível.</p>
        <div class="code">
            <pre>
.container {
    display: flex;
    align-items: stretch;   
}</pre>
        </div>
        <div class="cont" style="align-items: stretch;">
            <div class="item">Item 1</div>
            <div class="item">Item 2</div>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>