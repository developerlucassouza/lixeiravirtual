<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Atualizar uma página</h1>

            <p>Para atualizar uma página, basta utilizar o comando <code>location.reload()</code>.</p>
            <p>Veja o exemplo de um botão que, ao clicar, atualiza a tela:</p>

            <div class="code">
                <pre>&ltbutton onclick="location.reload()">Clique aqui&lt/button>   </pre>
            </div>

            <button class="btn btn-primary ml-20" onclick="location.reload()">Clique aqui</button>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>