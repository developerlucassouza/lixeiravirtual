<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>background CSS</h1>
        <p><code>background</code> é uma shorthand CSS que engloba outras propriedades CSS sobre o fundo.</p>

        <div class="code">
            <pre>
.elemento {
    background: valor valor valor;   
}</pre>
        </div>

        <p>O <code>background</code> irá seguir a seguinte ordem de propriedades:</p>
        <p><code><a href="backgroundcolor.php">background-color</a></code></p>
        <p><code><a href="backgroundimage.php">background-image</a></code></p>
        <p><code><a href="backgorundrepeat.php">background-repeat</a></code></p>
        <p><code><a href="backgroundattachment.php">background-attachment</a></code></p>
        <p><code><a href="backgroundposition.php">background-position</a></code></p>

        <div class="code">
            <pre>
.elemento {
    background: red url(...) repeat fixed center;   
}</pre>
        </div>

        <p>Você pode incluir todas ou apenas algumas dessas propriedades, dependendo das necessidades do seu design.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>