<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Tratamento de Erros PHP</h1>
            <p>Em JavaScript, o tratamento de erros é realizado usando as declarações <code>try</code> e <code>catch</code>. Essas declarações ajudam a lidar com exceções (erros) que podem ocorrer durante a execução do código.</p>
            <p>O bloco <code>try</code> será o código que possivelmente pode gerar um erro.</p>
            <p>O bloco <code>catch</code> será executado caso o bloco <code>try</code> apresente um erro.</p>
            <p>Dentro dos parenteses do <code>catch</code>, será possível criar uma variável de erro, e depois mostrar o erro com o <code>getMessage()</code>.</p>
            <p>Aqui está um exemplo básico:</p>

            <div class="code">
                <pre>
try {
    <span class="comentario">// Código que pode gerar um erro</span>
    $resultado = dividir(10, 0);
    echo $resultado;
} catch ($e) {
    <span class="comentario">// Bloco executado se ocorrer um erro</span>   
    echo $e -> getMessage();
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>