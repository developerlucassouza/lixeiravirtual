<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>background-position CSS</h1>
        <p>A propriedade <code>background-position</code> é usada para controlar a posição de uma imagem de fundo em relação ao elemento <code><a href="../html/index.php">HTML</a></code> que a contém.</p>
        <p>Ela permite que você especifique onde a imagem de fundo deve ser posicionada em relação ao elemento, seja horizontalmente, verticalmente ou em ambos os eixos.</p>
        <p>A síntaxe do <code>background-position</code> é:</p>
        <div class="code">
            <pre>background-position: <em>valorX</em> <em>valorY</em>;   </pre>
        </div>

        <p>Os valores podem ser os seguintes:</p>

        <hr>

        <h2>Palavras-chave</h2>
        <p>Palavras como <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code>, <code>center</code> e <code>initial</code> podem ser utilizadas.</p>
        <div class="code">
            <pre>background-position: center top;   </pre>
        </div>

        <hr>

        <h2>Porcentagem</h2>
        <p>Pode-se utilizar porcentagens, como no exemplo:</p>
        <div class="code">
            <pre>background-position: 50% 25%;</pre>
        </div>
        <p>Dessa forma, a imagem ficará no centro da horizontal (50%) e um querto a partir do topo vertical (25%).</p>

        <hr>

        <h2>Unidades de Comprimento</h2>
        <p>Por fim, outra possibilidade é utilizar unidades de comprimento como <code>px</code> e <code>em</code>.</p>
        <div class="code">
            <pre>background-position: 50px 20px;   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>