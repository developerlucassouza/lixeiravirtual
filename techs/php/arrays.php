<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Arrays PHP</h1>
            <p>Em programação, um array (também chamado de variável composta) é uma estrutura de dados que armazena uma coleção ordenada de elementos, onde cada elemento pode ser acessado por um índice ou uma chave. Os elementos em um array podem ser de qualquer tipo de dado, como números, strings, objetos, ou até mesmo outros arrays, dependendo da linguagem de programação.</p>
            <p>Veja o seguinte exemplo:</p>

            <div class="code">
                <pre>
<span class="comentario">// Variável Comum</span>
<span class="comentario">// Recebe apenas um valor </span>  
$num = 5;

<span class="comentario">// Array</span>
<span class="comentario">// Recebe vários valores</span>
$nums = array(5, 9, 2, 1);</pre>
            </div>

            <p>Assim, temos a seguinte estrutura de valores:</p>
            <p>Variável <code>$num</code></p>
            <table class="ml-20">
                <tr>
                    <td>5</td>
                </tr>
            </table>

            <p>Array <code>$nums</code></p>
            <table class="ml-20">
                <tr>
                    <td>5</td>
                    <td>9</td>
                    <td>2</td>
                    <td>1</td>
                </tr>
            </table>

            <hr>

            <p>Podemos visualizar cada posição do Array separadamente, utilizando colchetes, sendo 0 a primeira posição.</p>

            <p><code>$nums[0]</code> equivale a 5</p>

            <p><code>$nums[1]</code> equivale a 9</p>

            <p><code>$nums[2]</code> equivale a 2</p>

            <p><code>$nums[3]</code> equivale a 1</p>

            <hr>

            <p>Para alterar um valor:</p>

            <div class="code">
                <pre>
$nums[1] = 18;
<span class="comentario">// [5, 18, 2, 1]   </span></pre>
            </div>

            <hr>

            <p>A função <code>count()</code> irá retornar o tamanho do Array, isto é, a quantidade de valores dentro do Array.</p>

            <div class="code">
                <pre>
echo count($nums);
<span class="comentario">// Resultado: 4 </span></pre>
            </div>

            <hr>

            <p>Podemos percorrer um array usando o <code><a href="for.php">for</a></code> ou <code><a href="foreach.php">foreach</a></code>.</p>

            <div class="code">
                <pre>
$nums = array(...);

for ($c = 0; $c < count($nums); $c++) {   
    echo $nums[$c] . "&ltbr>";
}</pre>
            </div>

            <div class="code">
                <pre>
$nums = array(...);

foreach ($nums as $num) {   
    echo $num . "&ltbr>";
}</pre>
            </div>

        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>