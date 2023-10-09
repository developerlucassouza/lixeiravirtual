<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Funções MySQL</h1>

<p>As funções em MySQL são blocos de código que aceitam argumentos, executam determinadas operações e retornam um valor. Elas são usadas para simplificar tarefas complexas, encapsulando lógica e permitindo reutilização de código. As funções podem ser definidas pelo próprio usuário ou utilizadas a partir das funções integradas oferecidas pelo MySQL.</p>
<p>O MySQL oferece um conjunto de funções pré-definidas para executar tarefas comuns, como manipulação de strings, cálculos matemáticos, datas e horas, entre outros. Exemplos incluem COUNT() e SUM().</p>
<p>Funções abordadas aqui:</p>

<ul>
    <li><a href="#count">COUNT()</a></li>
    <li><a href="#max">MAX()</a></li>
    <li><a href="#min">MIN()</a></li>
    <li><a href="#sum">SUM()</a></li>
    <li><a href="#avg">AVG()</a></li>
</ul>

<hr>
<h2 id="count">COUNT()</h2>
<p>A função <code>COUNT()</code> irá retornar a quantidade de Registros de uma Tabela.</p>
<div class="code">
    <pre>SELECT COUNT(*) FROM cadastrados;</pre>
</div>
<p>Por exemplo, podemos contar quantos Registros possuem altura maior que 1.70.</p>
<div class="code">
    <pre>
SELECT COUNT(*) FROM cadastrados   
WHERE altura > 40;</pre>
</div>

<hr>
<h2 id="max">MAX()</h2>
<p>A função <code>MAX()</code> irá retornar o maior valor de uma Coluna.</p>
<div class="code">
    <pre>SELECT MAX(altura) FROM cadastrados;</pre>
</div>

<hr>
<h2 id="min">MIN()</h2>
<p>Semelhante a função <code>MAX()</code>, a função <code>MIN()</code> retornará o menor valor de uma Coluna.</p>
<div class="code">
    <pre>SELECT MIN(peso) FROM cadastrados;</pre>
</div>

<hr>
<h2 id="sum">SUM()</h2>
<p>A função <code>SUM()</code> retornará a soma de todos os valores.</p>
<div class="code">
    <pre>SELECT SUM(altura) FROM cadastrados;</pre>
</div>

<hr>
<h2 id="avg">AVG()</h2>
<p>E a função <code>AVG()</code> irá retornar a média aritmética de todos os valores da Coluna.</p>
<div class="code">
    <pre>SELECT AVG(peso) FROM cadastrados.</pre>
</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>