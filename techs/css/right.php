<?php
    include_once '../../header.php';
?>

<style type="text/css">
        div.pai {
            background-color: red;
            display: block;
            height: 350px;
            margin: auto;
            max-width: 350px;
        }

        div.filho {
            background-color: blue;
            height: 200px;
            max-width: 200px;

            position: relative;
            right: 30px;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>right CSS</h1>

<p>A propriedade <code>right</code> é utilizada em conjunto com a propriedade <code><a href="position.php">position</a></code> para posicionar um elemento HTML horizontalmente em relação ao seu contêiner ou ao seu contexto de posicionamento. Ela define a distância entre o lado direito do elemento e o lado direito do seu elemento pai.</p>
<p>A propriedade right é geralmente usada com valores numéricos (geralmente em pixels) para indicar a distância que o elemento deve estar à direita do ponto de referência.</p>

<div class="code">
    <pre>right: <em>valor</em>;   </pre>
</div>

<hr>

<p>Vamos considerar o elemento vermelho como <code>div.pai</code> e o azul como <code>div.filho</code></p>

<div class="code">
    <pre>
div.pai {
height: 350px;   
width: 350px;
}</pre>
</div>

<div class="code">
    <pre>
div.filho {
height: 200px;
width: 200px;

position: relative;    
right: 30px;
}</pre>
</div>

<div class="pai">
    <div class="filho"></div>
</div>

<p>Veja que o <code>div.filho</code> se deslocou 30px em relação a sua posição original, e não em relação ao <code>div.pai</code>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>