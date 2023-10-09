<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>DELETE MySQL</h1>
        <p>O comando <code>DELETE</code> é utilizado para deletar Registros.</p>
        <p>Assim como o <code><a href="update.php">UPDATE</a></code>, ele necessita do <code>WHERE</code>.</p>

        <div class="code">
            <pre>
DELETE FROM cadastrados
WHERE nome = 'Afonso';</pre>
        </div>

        <p>Assim, todos os Registros que possuem o nome igual a 'Afonso' serão deletados.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>