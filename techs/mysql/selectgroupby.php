<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>SELECT GROUP BY MySQL</h1>

<p>O comando <code>GROUP BY</code> irá criar agrupamentos, ou seja, ele não irá mostrar valores repetidos.</p>
<p>Por exemplo, um <code>GROUP BY</code> do campo nacionalidade irá retornar todas as nacionalidades cadastradas, sem repetir nenhuma.</p>

<div class="code">
    <pre>
SELECT nacionalidade FROM cadastrados   
GROUP BY nacionalidade;</pre>
</div>

<p>Para mostrar que os Registros de fato estão agrupados, podemos exibir o <code>COUNT</code>, que poderemos ver quantos Registros possuem cada nacionalidade.</p>

<div class="code">
    <pre>
SELECT nacionalidade, COUNT(nacionalidade) FROM cadastrados   
GROUP BY nacionalidade;</pre>
</div>

<hr>

<p>Também é possível definir quais grupos irão aparecer.</p>
<p>Por exemplo, mostrar apenas grupos onde o <code>COUNT(nome)</code> seja maior que 3.</p>
<p>Para isso, usamos o comando <code>HAVING</code>.</p>

<div class="code">
    <pre>
SELECT nacionalidade, COUNT(nome) FROM cadastrados   
GROUP BY nacionalidade
HAVING COUNT(nome) > 3;</pre>
</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>