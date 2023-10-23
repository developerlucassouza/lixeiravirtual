<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>top CSS</h1>
        <p>A propriedade <code>top</code> é utilizada para posicionar elementos relativamente a um elemento pai que tenha uma posição definida como "<code>relative</code>", "<code>absolute</code>" ou "<code>fixed</code>".</p>
        <p>Ela especifica a distância entre o topo do elemento posicionado e o topo do elemento pai posicionado. Normalmente, a propriedade <code>top</code> é utilizada em conjunto com as propriedades <code><a href="position.php">position</a></code> e <code><a href="left.php">left</a></code> (ou <code><a href="right.php">right</a></code> e <code><a href="bottom.php">bottom</a></code>) para posicionar elementos de forma precisa.</p>

        <div class="code">
            <pre>top: <em>valor</em>;   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>