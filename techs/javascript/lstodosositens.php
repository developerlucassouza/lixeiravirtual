<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Mostrando Todos os Itens do localStorage</h1>

            <p>Juntando o laço <code><a href="for.php">for</a></code> com o <code>localStorage.length</code>, podemos mostrar todos os valores que estão no localStorage.</p>

            <div class="code">
                <pre>
for (let i = 0; i < localStorage.length; i++) {
    const chave = localStorage.key(i);
    const valor = localStorage.getItem(chave);

    document.write(`${chave}: ${valor} &ltbr>`);   
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>