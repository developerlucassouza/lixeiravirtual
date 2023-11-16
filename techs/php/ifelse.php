<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>if/else PHP</h1>
            <p>A estrutura condicional <code>if</code> e <code>else</code> são usadas em PHP (e em muitas outras linguagens de programação) para controlar o fluxo de execução do código com base em condições booleanas.</p>
            <p>Se a condição dentro do <code>if</code> for verdadeira, o bloco de código dentro do <code>if</code> é executado. Se a condição for falsa, o bloco de código dentro do <code>else</code> (se existir) é executado.</p>

            <div class="code">
                <pre>
if (<em>condicional</em>) {
    <span class="comentario">// Bloco se verdadeiro</span>   
} else {
    <span class="comentario">// Bloco se falso</span>
}</pre>
            </div>

            <p>Veja o seguinte exemplo, analisando se a variável <code>$x</code> é maior que 10:</p>

            <div class="code">
                <pre>
$x = 9;
if ($x > 10) {
    echo 'O número é maior que 10';
} else {
    echo 'O número não é maior que 10';   
}</pre>
            </div>

            <p>O número não é maior que 10</p>

            <hr>

            <p>Você também pode colocar <code>elseif</code> seguidos, para você ter mais resultados.</p>

            <div class="code">
                <pre>
$x = 9;
if ($x > 10) {
    echo 'O número é maior que 10';
} elseif ($x > 7) {
    echo 'O número é maior que 7, mas menor que 10';   
} elseif ($x > 4) {
    echo 'O número é maior que 4, mas menor que 7';
} else {
    echo 'O número não é maior que 4';
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>