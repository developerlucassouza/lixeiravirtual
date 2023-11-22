<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Conversão de Arrays PHP</h1>
            <p>Para converter um <code><a href="dicionarios.php">Arrays Associativos</a></code> em <code><a href="arrays.php">Array Comum</a></code> usamos:</p>
            <div class="code">
                <pre>
<span class="comentario">// $comum : array comum</span>
<span class="comentario">// $assoc : array associativo</span>

$comum = array_values($assoc);
$comum = array_keys($assoc);</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>