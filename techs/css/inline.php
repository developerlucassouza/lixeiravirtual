<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>CSS Inline</h1>
        <p>O método inline consiste em escrever o CSS dentro das tags <a href="../html/index.php">HTML</a>.</p>
        <p>Para isso, dentro da tag de abertura, crie o parâmetro <code>style</code> e, dentro das aspas, utilize os estilos que desejar.</p>
        <p>Veja, por exemplo, colocar um <code><a href="backgroundcolor.php">background-color</a></code> em uma tag <code><a href="../html/p.php">&ltp&gt</a></code>.</p>

        <div class="code">
            <pre>&ltp style="background-color: cyan;">Este é um parágrafo com fundo ciano.&lt/p></pre>
        </div>

        <p style="background-color: cyan;">Este é um parágrafo com fundo ciano.</p>

        <p>Aplicando um estilo ao <code><a href="../html/body.php">&ltbody&gt</a></code>, você aplicará para todos os componentes do site.</p>
        <p>Por exemplo, podemos colocar um <code><a href="backgroundcolor.php">background-color</a></code> na tag <code><a href="../html/body.php">&ltbody&gt</a></code>, definindo a cor de fundo para o site.</p>
        <div class="code">
            <pre>
&ltbody style="background-color: black;">

    [...]

&lt/body></pre>
        </div>

        <hr>

        <p>Mas, se precisarmos utilizar o mesmo estilo em todas as tags <code><a href="../html/p.php">&ltp&gt</a></code>? O trabalho seria repetitivo utilizando o CSS Inline. Por isso, será preciso explorar um outro método, o método <a href="interno.php">interno</a>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>