<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>clear CSS</h1>
        <p>A propriedade <code>clear</code> é utilizada para controlar o posicionamento de elementos em relação a elementos flutuantes (floating elements) dentro do layout da página.</p>
        <p>Quando você tem elementos flutuantes, como imagens ou elementos de layout, pode ser necessário usar a propriedade <code>clear</code> para garantir que os elementos seguintes não fiquem ao lado dos elementos flutuantes, mas sim abaixo deles.</p>

        <div class="code">
            <pre>clear: <em>valor</em>;</pre>
        </div>

        <p><code>clear</code> pode receber o seguintes valores:</p>
        <p><code>left</code>: O elemento não pode ficar à esquerda de elementos flutuantes.</p>
        <p><code>right</code>: O elemento não pode ficar à direita de elementos flutuantes.</p>
        <p><code>both</code>: O elemento não pode ficar à esquerda nem à direita de elementos flutuantes. Isso garante que ele ficará abaixo de todos os elementos flutuantes.</p>
        <p><code>none</code> (padrão): O elemento pode ficar ao lado de elementos flutuantes.</p>

        <p>A propriedade <code>clear</code> é frequentemente usada em conjunto com elementos que seguem elementos flutuantes, como <code><a href="../html/index.php">&ltdiv></a></code>s de limpeza (clearfix) ou elementos de layout que precisam ser posicionados abaixo de elementos flutuantes. Ela é especialmente útil para evitar problemas de layout quando se trabalha com designs complexos que incluem elementos flutuantes.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>