<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltlink&gt HTML</h1>
        <p>A tag <code>link</code> é colocada dentro da tag <code><a href="head.html">&lthead&gt</a></code>, portanto não irá aparecer no documento, e irá relacionar o documento HTML atual a algum recurso externo.</p>
        <p>Costuma-se utilizar <code>link</code> para importar folhas de estilo <code><a href="../css/index.html">CSS</a></code> e também para adicionar favicons. Em ambos os casos, devemos usar o atributo <code>href</code> para indicar o caminho do arquivo <code><a href="../css/index.html">CSS</a></code> ou a imagem do favicon.</p>

        <hr>

        <p>Importar folha de estilo CSS:</p>
        <div class="code">
            <pre>
&ltlink rel="stylesheet" href="style.css"&gt   </pre>
        </div>

        <hr>

        <p>Adicionar favicon:</p>
        <div class="code">
            <pre>
&ltlink rel="shortcut icon" href="favicon.ico" type="image/x-icon"&gt   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>