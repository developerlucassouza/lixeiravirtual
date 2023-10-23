<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>float CSS</h1>
        <p>A propriedade <code>float</code> é utilizada para controlar o posicionamento horizontal de um elemento em relação aos outros elementos no layout de uma página web.</p>
        <p>Ela permite que um elemento flutue à esquerda ou à direita do elemento pai, de modo que o conteúdo seguinte seja posicionado ao redor dele.</p>

        <div class="code">
            <pre>float: <em>valor</em>;   </pre>
        </div>

        <p>A propriedade <code>float</code> foi originalmente projetada para criar layouts de página com texto que envolve imagens, mas também pode ser usada para criar layouts de colunas ou outras estruturas de layout. No entanto, é importante notar que o uso excessivo de float pode levar a problemas de layout, especialmente quando se trabalha com designs responsivos.</p>

        <hr>

        <p>A propriedade <code>float</code> pode receber os seguintes valores:</p>

        <p><code>left</code>: O elemento flutua para a esquerda. Isso faz com que o conteúdo seguinte seja posicionado à direita do elemento flutuante.</p>

        <p><code>right</code>: O elemento flutua para a direita. Isso faz com que o conteúdo seguinte seja posicionado à esquerda do elemento flutuante.</p>

        <p><code>none</code> (padrão): O elemento não flutua e é exibido no fluxo normal do documento.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>