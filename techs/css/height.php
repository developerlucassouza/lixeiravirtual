<?php
    include_once '../../header.php';
?>

<style type="text/css">
        div.teste {
            box-sizing: border-box;
            border: 1px solid black;
            display: inline-block;
            min-height: 50px;
            line-height: 50px;
            margin: 0;
            padding: 0;
            text-align: center;
            width: 24%;
            max-width: 200px;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>height CSS</h1>
        <p>A propriedade <code>height</code> é utilizada para definir a altura de um elemento <code><a href="../html/index.php">HTML</a></code>. Ela controla a dimensão vertical de um elemento, como uma caixa de texto, uma imagem, um elemento de bloco (<code><a href="../html/div.php">&ltdiv></a></code>, <code><a href="../html/p.php">&ltp></a></code> etc.) ou qualquer outro elemento que tenha uma dimensão vertical.</p>
        <p>A altura é especificada em unidades de medida, como pixels, porcentagens, ems ou outras unidades CSS válidas.</p>

        <div class="code">
            <pre>height: <em>valor</em>;</pre>
        </div>

        <p>Exemplos de tamanhos de <code>height</code>:</p>

        <div style="display: block; margin: auto; width: 95%; max-width: 810px">
            <div class="teste" style="height: 150px">150px</div>
            <div class="teste">50px</div>
            <div class="teste" style="height: 100px">100px</div>
            <div class="teste" style="height: 300px">300px</div>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>