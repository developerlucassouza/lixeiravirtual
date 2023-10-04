<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &lthead&gt HTML</h1>
        <p>A tag <code>head</code> é a "cabeça" do seu documento HTML, ele trás informações gerais sobre o documento. A tag <code>head</code> é posicionada antes da tag <code><a href="body.php">&ltbody&gt</a></code> e não aparece visualmente no navegador.</p>
        <p>No <code>head</code> definimos metadados como título do documento com a tag <code><a href="title.php">&lttitle&gt</a></code>, importar estilos de <a href="../css/">CSS</a> externo com <code><a href="link.php">&ltlink&gt</a></code>, entre outros metadados com a tag <code><a href="meta.php">&ltmeta&gt.</a></code></p>

        <div class="code">
            <pre>
&lthead&gt
    &ltmeta charset="UTF-8"&gt
    &ltmeta http-equiv="X-UA-Compatible" content="IE=edge"&gt
    &ltmeta name="viewport" content="width=device-width, initial-scale=1.0"&gt   
    &lttitle>Título do Documento&lt/title&gt
    &ltlink rel="stylesheet" href="style.css"&gt
&lt/head&gt</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>