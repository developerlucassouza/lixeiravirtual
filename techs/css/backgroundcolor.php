<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>background-color CSS</h1>
        <p>A propriedade <code>background-color</code> irá definir a cor de fundo de um elemento.</p>

        <div class="code">
            <pre>
p {
    background-color: red;   
}</pre>
        </div>

        <p style="background-color: red;">Olá, Mundo!</p>

        <hr>

        <p>Existem três métodos de definir cores em CSS:</p>

        <p>Usando nomes das cores</p>
        <div class="code">
            <pre>
p {
    background-color: yellow;   
}</pre>
        </div>
        <p style="background-color: yellow;">Olá, Mundo!</p>

        <hr>

        <p>Usando código hexadecimal</p>
        <div class="code">
            <pre>
p {
    background-color: #1E90FF;   
}</pre>
        </div>
        <p style="background-color: #1E90FF;">Olá, Mundo!</p>

        <hr>

        <p>Usando código RGB</p>
        <div class="code">
            <pre>
p {
    background-color: rgb(255, 165, 0);   
}</pre>
        </div>
        <p style="background-color: rgb(255, 165, 0);">Olá, Mundo!</p>

        <hr>

        <p>Usando código RGBA (transparência)</p>
        <div class="code">
            <pre>
p {
    background-color: rgba(0, 200, 0, 0.5);   
}</pre>
        </div>
        <p style="background-color: rgba(0, 200, 0, 0.5);">Olá, Mundo!</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>