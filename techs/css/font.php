<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>font CSS</h1>
        <p>Em CSS, a shorthand <code>font</code> é usada para definir várias propriedades de fonte em um único valor. Isso facilita a definição do estilo de fonte para elementos HTML, como texto, sem a necessidade de especificar várias propriedades separadamente.</p>

        <div class="code">
            <pre>font: <em>valor</em> <em>valor</em> <em>valor</em> ...   </pre>
        </div>

        <p>O valor da propriedade font é uma combinação das seguintes propriedades de fonte:</p>

        <p><code><a href="fontstyle.php">font-style</a></code>: Define o estilo da fonte, como "normal" (padrão), "italic" (itálico) ou "oblique" (inclinação).</p>
        <p><code><a href="fontvariant.php">font-variant</a></code>: Define se a fonte deve ser exibida em maiúsculas e minúsculas, "normal" (padrão) ou "small-caps" (caixa alta pequena).</p>
        <p><code><a href="fontweight.php">font-weight</a></code>: Define a espessura da fonte, como "normal" (padrão), "bold" (negrito), "bolder" (mais negrito) ou um valor numérico (100 a 900).</p>
        <p><code><a href="fontsize.php">font-size</a></code>: Define o tamanho da fonte, em unidades como px, em, rem ou porcentagem.</p>
        <p><code><a href="lineheight.php">line-height</a></code>: Define a altura da linha, que é o espaço vertical entre as linhas de texto.</p>
        <p><code><a href="fontfamily.php">font-family</a></code>: Define a família de fontes, especificando uma lista de fontes preferidas, como "Arial", "Helvetica", "sans-serif", entre outras.</p>

        <div class="code">
            <pre>font: italic small-caps bold 16px/1.5 "Times New Roman", Times, serif;   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>