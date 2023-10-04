<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltsummary&gt HTML</h1>
        <p>A tag <code>summary</code> faz conjunto com a tag <code><a href="details.html">&ltdetails&gt</a></code>.</p>
        <p>A tag <code>summary</code> irá alterar o rótulo da tag <code><a href="details.html">&ltdetails&gt</a></code>.</p>

        <div class="code">
            <pre>
<span class="comentario">&lt!-- Exemplo sem summary --&gt</span>
&ltdetails>
    &ltp>Detalhes escondidos.&lt/p>
&lt/details>

<span class="comentario">&lt!-- Exemplo com summary --&gt</span>
&ltdetails>
    &ltsummary>Uso da tag summary.&lt/summary>
    &ltp>Detalhes escondidos.&lt/p>
&lt/details>
            </pre>
        </div>

        <div style="margin-left:20px">
            <details>
                <p>Detalhes escondidos.</p>
            </details>
            <details>
                <summary>Uso da tag summary.</summary>
                <p>Detalhes escondidos.</p>
            </details>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>