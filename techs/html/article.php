<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltarticle&gt HTML</h1>
        <p>A tag <code>article</code> é uma tag semântica que indica um artigo do site, um tema separado. A tag por si só não possui estilo.</p>
        <div class="code">
            <pre>
&ltarticle&gtEste é um artigo do site.&lt/article&gt   </pre>
        </div>
        <article style="margin-left: 20px;">Este é um artigo do site.</article>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>