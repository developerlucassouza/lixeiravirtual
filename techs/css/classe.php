<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Classe HTML e CSS</h1>
        <p>As classes são muito semelhantes aos <a href="id.php">ids</a>, com a diferença de que as classes podem ser repetidas para vários elementos.</p>
        <p>As classes são representadas por <code>.</code></p>
        <p>Vamos criar classes que alterem a cor de fundo e a cor do texto:</p>

        <div class="code">
            <pre>
&ltstyle&gt
    .bg-azul {
        background-color: blue;   
    }

    .text-red {
        color: red;
    }
&lt/style&gt</pre>
        </div>

        <p>Após isso, basta aplicar as classes usando o atributo <code>class</code>.</p>

        <div class="code">
            <pre>
&ltbody>
    &lth1 class="bg-azul">Olá, Mundo!&lt/h1>
    &ltp class="text-red">Texto em vermelho.&lt/p>   
&lt/body></pre>
        </div>

        <h1 style="background-color: blue; text-align: left;">Olá, Mundo!</h1>
        <p style="color: red;">Texto em vermelho</p>

        <hr>

        <p>Um mesmo elemento <a href="../html/index.php">HTML</a> pode possuir mais de uma classe, veja:</p>

        <div class="code">
            <pre>&lth1 class="bg-azul text-red"&gtOlá, Mundo!&lt/h1&gt   </pre>
        </div>

        <h1 style="background-color: blue; text-align: left; color: red;">Olá, Mundo!</h1>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>