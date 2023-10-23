<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>position CSS</h1>
        <p>A propriedade <code>position</code> é utilizada para controlar o posicionamento de um elemento HTML em relação ao seu contexto de layout. Ela permite que você coloque elementos em diferentes posições dentro de uma página da web.</p>

        <div class="code">
            <pre>position: <em>valor</em>;   </pre>
        </div>

        <p>A propriedade <code>position</code> pode receber os seguintes valores:</p>

        <p><code>static</code> (padrão): Este é o valor padrão. Os elementos com position: static são posicionados de acordo com o fluxo normal do documento HTML. Ignorará as propriedades <code><a href="top.php">top</a></code>, <code><a href="right.php">right</a></code>, <code><a href="bottom.php">bottom</a></code> e <code><a href="left.php">left</a></code>.</p>
        <p><code>relative</code>: Elementos com position: relative são posicionados em relação à sua posição normal. Isso significa que você pode usar as propriedades <code><a href="top.php">top</a></code>, <code><a href="right.php">right</a></code>, <code><a href="bottom.php">bottom</a></code> e <code><a href="left.php">left</a></code> para deslocá-los a partir de sua posição normal.</p>
        <p><code>absolute</code>: Elementos com position: absolute são posicionados em relação ao elemento pai mais próximo com uma posição diferente de static. Se não houver um elemento pai com uma posição diferente de static, eles serão posicionados em relação ao documento HTML.</p>
        <p><code>fixed</code>: Elementos com position: fixed são posicionados em relação à janela do navegador. Eles permanecem no mesmo lugar, mesmo quando você rola a página.</p>
        <p><code>sticky</code>: Elementos com position: sticky são inicialmente posicionados como elementos relativos, mas se tornam elementos fixos quando você rola a página para que eles atinjam uma determinada posição.</p>

        <hr>

        <p>A escolha de qual valor usar depende do layout e do comportamento desejado. position é uma propriedade importante para criar layouts complexos e interativos em páginas da web. É frequentemente combinada com outras propriedades, como <code><a href="top.php">top</a></code>, <code><a href="right.php">right</a></code>, <code><a href="bottom.php">bottom</a></code> e <code><a href="left.php">left</a></code>, para controlar exatamente onde um elemento deve ser posicionado.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>