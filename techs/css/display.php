<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>display CSS</h1>
        <p>A propriedade <code>display</code> é utilizada para controlar como um elemento <code><a href="../html/index.php">HTML</a></code> é renderizado no layout da página. Ela determina como o elemento se comporta em relação a outros elementos, como se ele é exibido como um bloco, um elemento em linha ou outro tipo de exibição.</p>

        <div class="code">
            <pre>display: <em>valor</em>;</pre>
        </div>

        <p>A propriedade <code>display</code> pode receber os seguintes valores:</p>

        <p><code>block</code>: O elemento é exibido como um bloco, ocupando toda a largura disponível e iniciando uma nova linha. Elementos de bloco geralmente têm largura e altura configuráveis.</p>

        <p><code>inine</code>: O elemento é exibido como uma parte de texto em linha dentro de uma linha de texto ou conteúdo. Elementos em linha não têm largura ou altura configuráveis e geralmente não iniciam uma nova linha.</p>

        <p><code>inline-block</code>: O elemento é exibido como um bloco dentro de uma linha de texto. Ele compartilha algumas características de elementos inline e elementos block, permitindo que tenha largura e altura configuráveis e ainda respeite a linha de texto.</p>

        <p><code>none</code>: O elemento não é exibido na página, tornando-o invisível e ocupando espaço zero. Isso é útil para ocultar elementos de forma dinâmica com <code><a href="../javascript/index.php">JavaScript</a></code> ou CSS.</p>

        <p><code>table</code>: O elemento é tratado como uma tabela <code><a href="../html/index.php">HTML</a></code>, e você pode usar propriedades adicionais como <code>table-row</code> e <code>table-cell</code> para controlar o layout interno.</p>

        <p><code>flex</code>: O elemento se comporta como um container flexível, permitindo um layout flexível dos elementos filhos. Isso é útil para criar layouts responsivos e de fácil ajuste.</p>

        <p><code>grid</code>: O elemento se comporta como um container de grid, permitindo um layout de grid com elementos filhos. Isso é útil para criar layouts complexos em grade.</p>

        <p><code>inline-flex</code> e <code>inline-grid</code>:  São semelhantes a <code>flex</code> e <code>grid</code>, mas exibidos em linha, o que significa que eles se comportam como elementos em linha, mas com funcionalidades flexíveis ou de grid, respectivamente.</p>

        <hr>

        <p>A escolha do valor <code>display</code> depende da intenção de design e do comportamento desejado para o elemento. Você pode aplicar essa propriedade a elementos HTML usando CSS para controlar como eles são exibidos no layout da página.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>