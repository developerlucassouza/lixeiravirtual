<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>SELECT ORDER BY MySQL</h1>

<p>Por padrão, ao utilizar um <code><a href="select.php">SELECT</a> * FROM cadastrados</code>, a ordem dos Registros irá se basear na primeira coluna (normalmente a de id, a <code><a href="primarykey.php">primary key</a></code>). Mas, podemos mudar qual coluna irá ordenar a ordem dos Registros.</p>
<p>Vamos supor que, ao invés de ordenar pela coluna id, queremos ordenar pela coluna nome:</p>

<div class="code">
    <pre>
SELECT * FROM cadastrados   
ORDER BY nome;</pre>
</div>

<hr>

<p>Com o atributo <code>DESC</code>, a ordem será invertida do padrão, ao invés de A - Z será ordenada por Z - A.</p>

<div class="code">
    <pre>
SELECT * FROM cadastrados   
ORDER BY nome DESC;</pre>
</div>

<hr>

<p>Podemos colocar mais de uma coluna para criar a ordem, seguindo pela ordem de importância de cada coluna.</p>

<div class="code">
    <pre>
SELECT * FROM cadastrados   
ORDER BY nome, altura;</pre>
</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>