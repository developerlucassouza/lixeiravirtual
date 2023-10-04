<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltsmall&gt HTML</h1>
        <p>A tag <code>small</code> cria um texto pequeno dentro do seu documento. Geralmente, é utlizado uma fonte menor nessa tag do que no resto do documento.</p>

        <div class="code">
            <pre>
&ltp&gtTexto normal, &ltsmall&gtTexto pequeno&lt/small&gt&lt/p&gt   </pre>
        </div>

        <p>Texto normal, <small>Texto pequeno</small></p>

        <p>A tag <code>small</code> pode ser útil para indicar notas de rodapé, legenda de imagens, abreviações ou qualquer outro conteúdo secundário que precise ser exibido em um tamanho de fonte menor.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>