<?php
    include_once '../../header.php';
?>

<style type="text/css">
        
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        div.teste {
            border: 1px solid black;
            box-sizing: border-box;
            display: inline-block;
            font-family: 'Roboto', sans-serif;
            padding: 5px;
            text-align: center;
            width: 100px;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>font-weight CSS</h1>
        <p>A propriedade <code>font-weight</code> é utilizada para especificar a espessura da fonte em um elemento <code><a href="../html/index.php">HTML</a></code>. Ela controla a aparência da fonte tornando-a mais fina ou mais grossa. </p>

        <div class="code">
            <pre>font-weight: <em>valor</em>;</pre>
        </div>

        <p><code>font-weight</code> pode receber os valores <code>normal</code>, <code>bold</code>, <code>bolder</code> e <code>lighter</code></p>

        <div style="margin-left: 20px;">
            <div class="teste" style="font-weight: normal">normal</div>
            <div class="teste" style="font-weight: bold">bold</div>
            <div class="teste" style="font-weight: bolder">bolder</div>
            <div class="teste" style="font-weight: lighter">lighter</div>
        </div>

        <p style="color: red">ATENÇÃO: ALGUMAS FONTES NÃO POSSUEM TODAS AS VARIAÇÕES.</p>

        <hr>

        <p>Ou, ao invés de utilizar nomes, podemos utilizar as numerações, que vão de 100 a 900, aumentando de 100 em 100 (100, 200, 300... 800, 900).</p>

        <div class="code">
            <pre>font-weight: 500;</pre>
        </div>

        <p style="font-family: 'Roboto', sans-serif; font-weight: 500;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto mollitia quibusdam sequi nostrum magni sapiente culpa omnis quo libero quia ratione sint impedit, optio quis laboriosam, saepe nobis. Sunt, libero?</p>

        <div class="code">
            <pre>
font-weight: lighter; <span class="comentario">#Equivale a 100</span>   
font-weight: normal; <span class="comentario">#Equivale a 400</span>
font-weight: bold; <span class="comentario">#Equivale a 700</span>
font-weight: bolder; <span class="comentario">#Equivale a 900</span></pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>