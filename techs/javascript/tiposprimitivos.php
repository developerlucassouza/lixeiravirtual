<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Tipos Primitivos JS</h1>
            <p>O JavaScript possue três principais Tipos Primitivos:</p>
            <ul>
                <li>String</li>
                <li>Int</li>
                <li>Float</li>
                <li>Bool</li>
            </ul>
            <p><code>strings</code> são textos, como "Ryan", "Escola", "JavaScript", "Curso em Vídeo", etc.</p>
            <p><code>int</code> são números inteiros como 5, 9, -3, etc.</p>
            <p><code>float</code> são números decimais, com a casa flutuante sendo representada por ponto (<code>.</code>), como 3.6, 3.1415, -9.3, 5.0, etc.</p>
            <p><code>bool</code> são valores binários ou booleanos, como true ou false</p>

            <hr>

            <p>Diferente de outras linguagens, não é preciso definir o Tipo Primitivo ao criar uma variável.</p>

            <div class="code">
                <pre>
var nome = 'Pedro';
var idade = 34;
var peso = 74.8;
var felicidade = true;   </pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>