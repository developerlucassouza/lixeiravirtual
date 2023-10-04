<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltscript&gt HTML</h1>
        <p>A tag <code>script</code> é utilizada para criar códigos <code><a href="../javascript/index.html">JavaScript</a></code> dentro do documento HTML.</p>

        <div class="code">
            <pre>
&ltscript&gt
    var h1 = document.querySelector('h1#iprincipal')   
    h1.innerHTML = "Olá, Mundo!"
&lt/script&gt</pre>
        </div>

        <hr>

        <p>Com o atributo <code>src</code>, podemos importar um arquivo <code>.js</code> externo. Tal prática é muito mais utilizada do que escrever o código no próprio arquivo, por permitir a reutilização do script em outras páginas.</p>

        <div class="code">
            <pre>
&ltscript src="script.js"&gt&lt/script&gt   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>