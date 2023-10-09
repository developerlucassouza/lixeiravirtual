<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>DESCRIBE MySQL</h1>
        <p>O comando <code>DESCRIBE</code> serve para visualizarmos a estrutura da tabela.</p>
        <p>Usaremos esse comando para conferir se a Tabela pessoas foi criada corretamente.</p>

        <div class="code">
            <pre>DESCRIBE pessoas;</pre>
        </div>

        <p>Esse comando é útil para conferir quantas e quais colunas uma Tabela possui.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>