<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &lttextarea&gt HTML</h1>
        <p>A tag <code>textarea</code> é uma área de texto semelhante ao <code><a href="input.html">&ltinput&gt</a></code> do tipo <code>text</code>, mas que possui uma área maior, permitindo escrever textos maiores.</p>

        <div class="code">
            <pre>
&lttextarea cols="30" rows="10"&gt&lt/textarea&gt   </pre>
        </div>

        <textarea cols="30" rows="10" style="margin-left:20px;"></textarea>

        <p>Por padrão, o <code>textarea</code> oferece os atributos <code>cols</code> e <code>rows</code> com os valores 30 e 10, respectivamente.</p>
        <p>O <code>cols</code> indica a quantidade de caracteres que cabem em uma mesma linha.</p>
        <p>O <code>rows</code> indica quantas linhas poderão ser visualizadas por vez.</p>

        <hr>

        <p>Podemos atribuir um valor padrão ao que está escrito dentro do <code>textarea</code></p>

        <div class="code">
            <pre>
&lttextarea cols="30" rows="10"&gtDigite um texto&lt/textarea&gt   </pre>
        </div>

        <textarea cols="30" rows="10" style="margin-left:20px;">Digite um texto</textarea>

        <hr>

        <p>Ou ainda utilizar o <code>placeholder</code> para colocar um texto fantasma ao fundo do <code>textarea</code>.</p>

        <div class="code">
            <pre>
&lttextarea cols="30" rows="10" placeholder="Digite um texto"&gt&lt/textarea&gt   </pre>
        </div>

        <textarea cols="30" rows="10" style="margin-left:20px;" placeholder="Digite um texto"></textarea>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>