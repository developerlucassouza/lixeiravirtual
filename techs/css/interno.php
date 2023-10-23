<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>CSS Interno</h1>
        <p>Diferente do <a href="inline.php">CSS Inline</a>, o CSS Interno nos permite configurar um mesmo estilo para uma tag em todas as vezes que ela aparece.</p>
        <p>Para utilzar o CSS Interno, será preciso criar uma tag <code><a href="../html/style.php">&ltstyle&gt</a></code> dentro da tag <code><a href="../html/head.php">&lthead&gt</a></code> do seu documento <code><a href="../html/index.php">HTML</a></code>.</p>

        <div class="code">
            <pre>
&lthtml>
    &lthead>
        [...]
        &ltstyle>

            <span class="comentario">/* aqui será escrito o CSS Interno */</span>   
            
        &lt/style>
    &lt/head>

    &ltbody>
        [...]
    &lt/body>
&lt/html></pre>
        </div>

        <p>Dentro da tag <code><a href="../html/style.php">&ltstyle&gt</a></code>, digite o nome da tag que quer configurar o CSS e, entre chaves {} configure os estilos desejados.</p>
        <p>Ao se utilizar CSS Interno ao invés do <a href="inline.php">Inline</a>, o estilo irá valer para todas as vezes que usar a tag.</p>

        <div class="code">
            <pre>
&lthtml>
    &lthead>
        [...]
        &ltstyle>
            p {
                background-color: orange;   
            }
        &lt/style>
    &lt/head>

    &ltbody>
        &ltp&gtParágrafo 1&lt/p&gt
        &ltp&gtParágrafo 2&lt/p&gt
        &ltp&gtParágrafo 3&lt/p&gt
    &lt/body>
&lt/html></pre>
        </div>

        <p style="background-color: orange;">Parágrafo 1</p>
        <p style="background-color: orange;">Parágrafo 2</p>
        <p style="background-color: orange;">Parágrafo 3</p>

        <hr>

        <p>Mas, o uso do CSS Interno pode acarretar dois problemas:</p>
        <p>Primeiro, por estar uitlizando <a href="../html/index.php">HTML</a> e CSS no mesmo documento, o tamanho do documento irá ficar muito grande, prejudicando a visualização, a manutenção do código e a organização.</p>
        <p>Segundo, o CSS Interno será utilizado apenas dentro desta página, logo, se o seu site possuir mais de uma página, não será possível reciclar o CSS Interno em outras páginas.</p>
        <p>Para resolver ambos os problemas, utiliza-se o <a href="externo.php">CSS Externo</a>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>