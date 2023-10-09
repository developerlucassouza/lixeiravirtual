<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>TRUNCATE TABLE MySQL</h1>
        <p>Como vimos anteriormente, podemos utilizar o comando <code><a href="delete.php">DELETE</a></code> para deletar alguns Registros da Tabela.</p>
        <p>Mas, podemos utilizar o comando <code>TRUNCATE</code> para apagar todos os Registros de uma Tabela.</p>

        <div class="code">
            <pre>TRUNCATE TABLE cadastrados;</pre>
        </div>

        <p>Tome cuidado com os comandos <code><a href="update.php">UPDATE</a></code>, <code><a href="delete.php">DELETE</a></code> e <code>TRUNCATE TABLE</code>.</p>
        <p>Os comandos do MySQL são irreversíveis, então tome cuidado.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>