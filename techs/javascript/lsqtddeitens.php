<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Quantidade de Itens do localStorage</h1>

            <p>Utilizando o <code>.length</code> no localStorage, podemos saber quantos itens estão cadastrados no localStorage.</p>

            <div class="code">
                <pre>alert(localStorage.length);   </pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>