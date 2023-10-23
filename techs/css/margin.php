<?php
    include_once '../../header.php';
?>

<style type="text/css">
        div.teste {
            border: 1px solid black;
            height: 100px;
            width: 80%;

            margin: 10px 0;
            text-align: center;
            line-height: 100px;

        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>margin CSS</h1>
        <p>A propriedade <ccode>margin</ccode> é utilizada para definir o espaço em torno de um elemento <code><a href="../html/index.php">HTML</a></code>. Ela controla o espaço entre as bordas do elemento e outros elementos adjacentes.</p>
        <p>Normalmente, utiliza-se a medida em <code>px</code>, mas pode-se utilizar outros valores de medida como <code>%</code>.</p>

        <div class="code">
            <pre>margin: <em>valor</em>;   </pre>
        </div>

        <hr>

        <p>Vamos usar de exemplo a seguinte configuração:</p>

        <div class="code">
            <pre>
div {
    border: 1px solid black;   
    height: 100px;
    width: 100%;
}</pre>
        </div>

        <div class="teste">Exemplo da div</div>

        <p>Agora, veja a mesma div, aplicando um <code>margin</code>:</p>

        <div class="code">
            <pre>margin: 20px;   </pre>
        </div>

        <div class="teste" style="margin: 20px;">Exemplo com <code>margin</code></div>

        <hr>

        <p>Podemos definir o <code>margin</code> de cada lado separadamente:</p>

        <div class="code">
            <pre>
<span class="comentario">/* Todos os lados */   </span>
margin: 10px; </pre>
        </div>

        <div class="code">
            <pre>
<span class="comentario">/* Superior e Inferior, seguido de Direita e Esquerda. */   </span>
margin: 10px 20px; </pre>
        </div>

        <div class="code">
            <pre>
<span class="comentario">/* Na ordem: Superior, Direita, Inferior, Esquerda */   </span>
margin: 10px 20px 10px 30px;</pre>
        </div>

        <hr>

        <p>Podemos utilzar o <code>margin: auto;</code> juntamente do <code><a href="display.php">display</a>: block;</code> para centralizar uma div.</p>

        <div class="code">
            <pre>
div {
    display: block;   
    margin: auto;
}</pre>
        </div>

        <div class="teste" style="display: block; margin: auto;">div centralizada</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>