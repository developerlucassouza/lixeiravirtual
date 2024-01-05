<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Excluindo Elementos DOM</h1>

            <p>Utilizando a função <code>.remove()</code>, podemos excluir elementos HTML.</p>

            <div class="code">
                <pre>
<span class="comentario">// Selecionando elemento</span>
let paragrafo = document.querySelector('p#principal');   

<span class="comentario">// Removendo parágrafo</span>
paragrafo.remove();</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>