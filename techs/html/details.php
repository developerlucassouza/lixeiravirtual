<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltdetails&gt HTML</h1>
        <p>A tag <code>details</code> cria detalhes que podem ser abertos e fechados pelo usuário. Por padrão ele irá aparecer como um botão de Saiba mais.</p>

        <div class="code">
            <pre>
&ltdetails&gt
    &ltp&gtDetalhes escondidos&lt/p&gt   
&lt/details&gt</pre>
        </div>

        <details style="margin-left:20px;">
            <p>Detalhes escondidos</p>
        </details>

        <hr>

        <p>Há também a adição da tag <code><a href="summary.html">&ltsummary&gt</a></code> que altera o que estará escrito no indicador no lugar de Saiba mais.</p>

        <div class="code">
            <pre>
&ltdetails&gt
    &ltsummary&gtClique aqui para mais detalhes&lt/summary&gt   
    &ltp&gtDetalhes escondidos&lt/p&gt   
&lt/details&gt</pre>
        </div>

        <details style="margin-left:20px;">
            <summary>Clique aqui para mais detalhes</summary>
            <p>Detalhes escondidos</p>
        </details>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>