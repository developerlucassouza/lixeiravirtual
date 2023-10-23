<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>background-repeat CSS</h1>
        <p>A propriedade <code>background-repeat</code> é usada para controlar como uma imagem de fundo se repete ou não se repete dentro do elemento <code><a href="../html/index.php">HTML</a></code> que a contém.</p>
        <p>Ela define a forma como a imagem de fundo é renderizada quando a imagem é menor do que a área do elemento.</p>

        <div class="code">
            <pre>background-repeat: <em>valor</em></pre>
        </div>

        <p>Os valores de <code>background-repeat</code> são:</p>
        <p><code>no-repeat</code>: A imagem de fundo não se repete.</p>
        <p><code>repeat</code>: A imagem de fundo se repete, ocupando todo o espaço.</p>
        <p><code>repeat-x</code>: A imagem de fundo se repete apenas no eixo x (horizontal).</p>
        <p><code>repeat-y</code>: A imagem de fundo se repete apenas no eixo y (vertical).</p>

        <p>O uso do <code>background-repeat</code> é útil quando você deseja controlar a forma como as imagens de fundo são exibidas em elementos <code><a href="../html/index.php">HTML</a></code>, especialmente quando está criando layouts ou elementos de design complexos.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>