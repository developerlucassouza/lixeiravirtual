<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>bottom CSS</h1>
        <p>Em CSS, a propriedade <code>bottom</code> é utilizada em conjunto com a propriedade <code><a href="position.php">position</a></code> para posicionar elementos em relação ao seu contêiner pai.</p>
        <p>Ela especifica a distância entre a parte inferior do elemento e a parte inferior do contêiner pai.</p>
        <p>A propriedade <code><a href="position.php">position</a></code> deve ser definida como <code>relative</code>, <code>absolute</code>, ou <code>fixed</code> para que a propriedade <code>bottom</code> tenha efeito.</p>

        <div class="code">
            <pre>
.elemento {
    position: relative;   
    bottom: 30px;
}</pre>
        </div>

        <p>Para utilizar corretamente a propriedade <code>bottom</code>, é preciso entender o funcionamento da propriedade <code><a href="position.php">position</a></code>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>