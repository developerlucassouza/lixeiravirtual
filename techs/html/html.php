<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &lthtml&gt HTML</h1>
        <p>A tag <code>html</code> é a raiz de todo o documento HTML, todas as demais tags estão dentro dela (exceto a tag <code>&lt!DOCTYPE&gt).</code></p>

        <div class="code">
            <pre>
&lthtml&gt
    &lthead&gt
        &lttitle&gtTag html&lt/title&gt
    &lt/head&gt

    &ltbody&gt
        &lth1&gtOlá, Mundo!&lt/h1&gt
        &ltp&gtAprendendo sobre a tag &ltHTML&gt&lt/p&gt   
    &lt/body&gt
&lt/html&gt</pre>
        </div>

        <p>Na tag <code>html</code> incluimos o atributo <code>lang</code>, que indicará o idioma do documento HTML.</p>

        <div class="code">
            <pre>
&lthtml lang="pt-br"&gt   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>