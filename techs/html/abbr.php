<?php
include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Tag &ltabbr&gt HTML</h1>

            <p>A tag <code>abbr</code> serve para indicar uma abreviação e mostrar o seu significado ao passar o mouse
                em cima. O significado da sigla será passado como parâmetro de <code>title</code></p>

            <div class="code">
                <pre>
&ltabbr title="HyperText Markup Language"&gtHTML&lt/abbr&gt   </pre>
            </div>

            <abbr title="HyperText Markup Language" style="margin-left:20px;">HTML</abbr>
        </main>
    </div>
</div>

<?php
include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>