<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>CSS Externo</h1>
        <p>O CSS Externo é feito em um outro arquivo fora do documento <a href="../html/index.php">HTML</a>.</p>
        <p>Escrevendo o CSS dentro de um arquivo .css, há a vantagem de se reutilizar o CSS em outras páginas <a href="../html/index.php">HTML</a>.</p>
        <p>Para importar um arquivo .css, dentro da tag <code><a href="../html/head.php">&lthead&gt</a></code>, digite <code>link:css</code> e pressione Enter (caso esteja no VS Code), gerando o seguinte código:</p>

        <div class="code">
            <pre>
&lthead>
    [...]
    &ltlink rel="stylesheet" href="style.css">   
&lt/head></pre>
        </div>

        <p>No parâmetro <code>href</code> será colocado o caminho e nome do seu arquivo .css.</p>
        <p>Normalmente os arquivos CSS possuem nome <code>style.css</code> ou <code>estilo.css</code>.</p>

        <hr>

        <p>Ainda falando da tag <code><a href="../html/link.php">&ltlink&gt</a></code> para importar o CSS. Por boas práticas adicionamos um <code>type="text/css"</code> para indicar o tipo do documento importado.</p>

        <div class="code">
            <pre>
&lthead>
    [...]
    &ltlink rel="stylesheet" href="style.css" type="text/css">   
&lt/head></pre>
        </div>

        <hr>

        <p>Após importar o arquivo style.css, podemos escrever o código CSS dentro do arquivo. Assim, podemos reutilizar o CSS em várias páginas <a href="../html/index.php">HTML</a>.</p>

        <div class="code">
            <pre>
<span class="comentario">/* Dentro do arquivo style.css */</span>   
body {
    background-color: black;
}

p {
    color: cyan;
}</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>