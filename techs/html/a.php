<?php
include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens">
            
        </div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Tag &lta&gt HTML</h1>
            <p>A tag <code>&lta&gt</code> é responsável por criar uma ancora de link, ou seja, abrir outros links
                externos ou outras páginas locais do site. Para passar a url desejada é preciso usar o parâmetro
                <code>href</code> dentro da tag</p>

            <div class="code">
                <pre>
&lta href="https://www.youtube.com/"&gtAcesse o YouTube&lt/a&gt   </pre>
            </div>

            <p><a href="https://www.youtube.com/">Acesse o YouTube</a></p>

            <hr>

            <p>O parâmetro <code>target</code> indica onde o link será aberto, tendo <code>_self</code> (padrão) para
                abrir na mesma aba do navegador e <code>_blank</code> para abrir em uma nova aba do navegador.</p>

            <div class="code">
                <pre>
&lta href="https://www.youtube.com/" target="_blank"&gtAcesse o YouTube&lt/a&gt   </pre>
            </div>

            <p><a href="https://www.youtube.com/" target="_blank">Acesse o YouTube</a></p>

            <hr>

            <h2>Parâmetros do target</h2>
            <p><code>_self</code>: Na mesma aba atual (default).</p>
            <p><code>_blank</code>: Nova aba do navegador, mas pode ser configurado para uma nova janela.</p>
            <p><code>_parent</code>: Contexto de navegação pai. Caso não exista, agirá como um <code>_self</code></p>
            <p><code>_top</code>: Contexto de navegação superior. Caso não exista, agirá como um <code>_self</code></p>
        </main>
    </div>
</div>

<?php
include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>