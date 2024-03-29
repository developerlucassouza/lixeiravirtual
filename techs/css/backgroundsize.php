<?php
    include_once '../../header.php';
?>

<style>
        div.teste {
            background-color: aqua;
            background-image: url(imagens/controle.jpg);
            background-repeat: no-repeat;
            margin: auto;
            min-height: 400px;
            width: 80%;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>background-size CSS</h1>
        <p>O <code>background-size</code> é utilizado para controlar o tamanho da imagem de fundo definida com <code><a href="backgroundimage.php">background-image</a></code>, </p>

        <p>Existem três tipos de valores aceitos pelo <code>background-size</code>:</p>

        <h2>Valor de Tamanho</h2>
        <p>São as medidas normais do <code>CSS</code>, como <code>px</code> e <code>%</code></p>
        <div class="code">
            <pre>background-size: 200px;</pre>
        </div>
        <div class="code">
            <pre>background-size: 70%;</pre>
        </div>

        <hr>

        <h2>Valor de Cobertura</h2>
        <p>Os valores de cobertura irão dimensionar a imagem de fundo de acordo com o elemento que a contém.</p>
        <p>Para exemplificar, a seguinte imagem será utilizada como <code><a href="backgroundimage.php">background-image</a></code></p>
        <img src="imagens/controle.jpg" alt="" style="display:block; margin: auto;">
        <p>E a <code>div</code> terá os seguintes estilos:</p>
        <div class="code">
            <pre>
.elemento {
    background-color: aqua;
    background-image: url(imagem.jpg);   
    background-repeat: no-repeat;
    margin: auto;
    width: 80%;
}</pre>
        </div>

        <p>Os Valores de Cobertua são dois: <code>cover</code> e <code>contain</code>.</p>
        <p><code>cover</code>: irá esticar a imagem até cobrir toda a <code>div</code>, podendo cortar a imagem.</p>

        <div class="code">
            <pre>background-size: cover;</pre>
        </div>

        <div class="teste" style="background-size: cover;"></div>

        <p><code>contain</code>: a imagem será dimensionada para caber completamente dentro da <code>div</code>.</p>

        <div class="code">
            <pre>background-size: contain;</pre>
        </div>

        <div class="teste" style="background-size: contain;"></div>

        <hr>

        <h2>Valores Múltiplos</h2>
        <p>O <code>background-size</code> aceita dois valores simultâneos, que irão definir o tamanho horizontal e vertical separadamente.</p>

        <div class="code">
            <pre>background-size: 100% 200px</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>