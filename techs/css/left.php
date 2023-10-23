<?php
    include_once '../../header.php';
?>

<style>
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
            left: 40px;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>left CSS</h1>
        <p>A propriedade <code>left</code> é geralmente utilizada para posicionar elementos em relação ao lado esquerdo de um elemento de posicionamento pai.</p>
        <p>Essa propriedade é comumente usada em conjunto com propriedades de posicionamento, como <code><a href="position.php">position</a></code>, <code>relative</code>, <code>absolute</code> ou <code>fixed</code>.</p>

        <div class="code">
            <pre>left: <em>valor</em>;   </pre>
        </div>

        <p>Para usar a propriedade <code>left</code>, você primeiro precisa definir a propriedade <code><a href="position.php">position</a></code> como <code>relative</code>, <code>absolute</code> ou <code>fixed</code> no elemento que deseja posicionar. Isso cria um contexto de posicionamento para o elemento.</p>

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
    left: 40px;
}</pre>
        </div>

        <div class="pai">
            <div class="filho"></div>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>