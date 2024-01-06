<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS .setAttribute</h1>

            <p>O comando <code>.setAttribute</code> serve para adicionarmos ou alterarmos atributos HTML, como classes, id, href, src, target, etc.</p>

            <div class="code">
                <pre><em>elemento</em>.setAttribute('<em>atributo</em>', '<em>valor</em>');   </pre>
            </div>

            <p>Veja o exemplo adicionando o ID principal a uma <code>&ltdiv></code> que está na variável div:</p>

            <div class="code">
                <pre>div.setAttribute('id', 'principal');   </pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>