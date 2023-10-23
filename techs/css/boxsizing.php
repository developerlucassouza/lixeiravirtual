<?php
    include_once '../../header.php';
?>

<style>
        div.teste {
            border: 1px solid black;
            min-height: 150px;
            margin: 20px auto;
            padding: 20px;
            width: 80%;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>box-sizing CSS</h1>
        <p>A propriedade <code>box-sizing</code> é utilizada para controlar como a largura e a altura de um elemento <code><a href="../html/index.php">HTML</a></code> são calculadas, levando em consideração o preenchimento (<code><a href="padding.php">padding</a></code>) e a borda (<code><a href="border.php">border</a></code>) ou não. Ela afeta a modelagem do tamanho de um elemento e como ele se encaixa em seu contêiner.</p>

        <div class="code">
            <pre>box-sizing: <em>valor</em>;</pre>
        </div>

        <hr>

        <p>Existem apenas dois valores de <code>box-sizing</code>:</p>

        <p><code>content-box</code> (padrão): A largura e a altura do elemento são calculadas apenas com base no conteúdo real do elemento, excluindo qualquer preenchimento (<code><a href="padding.php">padding</a></code>) e borda (<code><a href="border.php">border</a></code>).</p>

        <p><code>border-box</code>: a largura e a altura do elemento incluem o preenchimento (<code><a href="padding.php">padding</a></code>) e a borda (<code><a href="border.php">border</a></code>).</p>

        <p>Vamos considerar duas <code><a href="../html/div.php">&ltdiv></a></code> com mesmo <code><a href="width.php">width</a></code> e mesmo <code><a href="height.php">height</a></code>, mas com <code>box-sizing</code> diferentes.</p>

        <div class="code">
            <pre>
div {
    border: 1px solid black;   
    min-height: 150px;
    margin: 20px auto;
    padding: 20px;
    width: 80%;
}</pre>
        </div>

        <div class="teste" style="box-sizing: content-box;"><h3>box-sizing: content-box;</h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eaque error dolorum, est et aperiam. Adipisci exercitationem rerum voluptates eligendi voluptatum blanditiis culpa quidem qui, id, aperiam perspiciatis, fugiat atque.</div>

        <div class="teste" style="box-sizing: border-box;"><h3>box-sizing: border-box;</h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eaque error dolorum, est et aperiam. Adipisci exercitationem rerum voluptates eligendi voluptatum blanditiis culpa quidem qui, id, aperiam perspiciatis, fugiat atque.</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>