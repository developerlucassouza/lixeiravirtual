<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Números Aleatórios JS</h1>
            <p>Como o <code>Math.Random()</code> retorna apenas valores entre 0 e 1, precisamos usar o <code>Math.floor()</code> e uma multiplicação.</p>
            <p>Veja o exemplo:</p>

            <div class="code">
                <pre>
<span class="comentario">// Número inteiro aleatório de 0 a 10:   </span>
Math.floor(Math.random() * 11);</pre>
            </div>

            <p>Multiplique o random pelo valor máximo que você quer, mais um.</p>

            <hr>

            <p>Caso você não queria que comece do 0, é preciso ter uma adição:</p>

            <div class="code">
                <pre>
<span class="comentario">// Número inteiro aleatório de 1 a 100:   </span>
Math.floor(Math.random() * 100) + 1;</pre>
            </div>

            <hr>

            <p>A função abaixo irá retornar um número aleatório entre <em>min</em> e <em>max</em>. (ambos incluídos).</p>

            <div class="code">
                <pre>
function randint(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;   
}</pre>
            </div>

        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>