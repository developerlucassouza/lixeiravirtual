<?php
    include_once '../../header.php';
?>

<style>
        div.teste {
            height: 100px;
            line-height: 100px;
            margin: auto;
            text-align: center;
            width: 80%;
        }

        span.style {
            margin: 30px;
            padding: 5px;
            width: 100px;

            outline-width: 10px;
            outline-color: black;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>outline CSS</h1>
        <p>A propriedade <code>outline</code> é utilizada para adicionar uma linha ou contorno ao redor de um elemento <code><a href="../html/index.php">HTML</a></code>. </p>
        <p>Geralmente, esse contorno não afeta o layout da página e é utilizado para destacar um elemento, como um link ou um elemento de formulário, quando ele recebe foco ou é selecionado. O <code>outline</code> é frequentemente usado para fins de acessibilidade, indicando qual elemento está atualmente em foco ou destacando elementos interativos.</p>

        <div class="code">
            <pre>outline: 1:5px solid red;   </pre>
        </div>

        <div class="teste" style="outline: 5px solid red;">Exemplo de outline</div>

        <p>Os valores recebidos são, em ordem, <code>outline-width</code>, <code>outline-style</code> e <code>outline-color</code>.</p>

        <hr>

        <p><code>outline-width</code>: determina a largura do <code>outline</code>, medido em <code>px</code>.</p>
        <p><code>outline-style</code>: determina o tipo de <code>outline</code> criado, podendo ter os seguintes estilos:</p>
        <div style="padding: 20px;">
            <span class="style" style="outline-style: none;">none</span>
            <span class="style" style="outline-style: dotted;">dotted</span>
            <span class="style" style="outline-style: dashed;">dashed</span> 
        </div>

        <div style="padding: 20px;">
            <span class="style" style="outline-style: solid;">solid</span>
            <span class="style" style="outline-style: double;">double</span>
            <span class="style" style="outline-style: groove;">groove</span>
        </div>

        <div style="padding: 20px;">
            <span class="style" style="outline-style: ridge;">ridge</span>
            <span class="style" style="outline-style: inset;">inset</span>
            <span class="style" style="outline-style: outset;">outset</span>
        </div>
        <p><code>outline-color</code>: determina a cor do <code>outline</code>, podendo ser aceito o nome das cores, RGB, Hexadecimal e RGBA.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>