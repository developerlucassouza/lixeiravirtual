<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>if/else JS</h1>
            <p>A estrutura condicional <code>if</code> e <code>else</code> são usadas em <code>JavaScript</code> (e em muitas outras linguagens de programação) para controlar o fluxo de execução do código com base em condições booleanas.</p>
            <p>Se a condição dentro do <code>if</code> for verdadeira, o bloco de código dentro do <code>if</code> é executado. Se a condição for falsa, o bloco de código dentro do <code>else</code> (se existir) é executado.</p>

            <div class="code">
                <pre>
if (<em>condicional</em>) {
    <span class="comentario">// Bloco se verdadeiro</span>   
} else {
    <span class="comentario">// Bloco se falso</span>
}</pre>
            </div>

            <p>Veja o seguinte exemplo, analisando se um número x é maior que 10:</p>

            <div class="code">
                <pre>
let x = 9;
if (x > 10) {
    console.log("O número é maior que 10");
} else {
    console.log("O número não é maior que 10");
}</pre>
            </div>

            <div class="output">
                <pre>O número não é maior que 10</pre>
            </div>

            <hr>

            <p>No exemplo abaixo, será perguntado um número para o usuário por meio de <code>prompt()</code>, e será mostrado o resultado com <code>alert()</code>.</p>

            <div class="code">
                <pre>
x = Number(prompt("Digite um número:"));
if (x > 10) {
    alert("O número é maior que 10");
} else {
    alert("O número não é maior que 10");
}</pre>
            </div>

            <button class="btn btn-info" style="margin-left: 20px;"
            onclick="exemplo1()">
                Ver exemplo
            </button>

            <script type="text/javascript">
                function exemplo1() {
                    x = Number(prompt("Digite um número:"));
                    if (x > 10) {
                        alert("O número é maior que 10");
                    } else {
                        alert("O número não é maior que 10");
                    }
                }
            </script>

            <hr>

            <p>Você também pode colocar <code>else if</code> seguidos, para você ter mais resultados.</p>

            <div class="code">
                <pre>
let x = 9;
if (x > 10) {
    console.log("O número é maior que 10");
} else if (x > 7) {
    console.log("O número é maior que 7, mas menor que 10");   
} else if (x > 4) {
    console.log("O número é maior que 4, mas menor que 7");
} else {
    console.log("O número não é maior que 4");
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>