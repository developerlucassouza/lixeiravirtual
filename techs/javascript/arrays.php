<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Arrays JS</h1>
            <p>Em programação, um array (também chamado de variável composta) é uma estrutura de dados que armazena uma coleção ordenada de elementos, onde cada elemento pode ser acessado por um índice ou uma chave. Os elementos em um array podem ser de qualquer tipo de dado, como números, strings, objetos, ou até mesmo outros arrays, dependendo da linguagem de programação.</p>

            <p>Veja o seguinte exemplo:</p>

            <div class="code">
                <pre>
<span class="comentario">// Variável Comum</span>
<span class="comentario">// Recebe apenas um valor</span>   
let num = 5;

<span class="comentario">// Array</span>
<span class="comentario">// Recebe vários valores</span>
let nums = [5, 9, 2, 1];</pre>
            </div>

            <p>Assim, temos a seguinte estrutura de valores:</p>

            <p class="mt-3">Variável <code>num</code></p>
            <table class="ml-20">
                <tr>
                    <td>5</td>
                </tr>
            </table>

            <p class="mt-3">Array <code>nums</code></p>
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

            <p><code>nums[0]</code> equivale a 5</p>
            <p><code>nums[1]</code> equivale a 9</p>
            <p><code>nums[2]</code> equivale a 2</p>
            <p><code>nums[3]</code> equivale a 1</p>

            <hr>

            <p>Para alterar um valor:</p>
            <div class="code">
                <pre>
nums[1] = 18;
<span class="comentario">// [5, 18, 2, 1]</span>   </pre>
            </div>

            <p class="mt-3">Array <code>nums</code></p>
            <table class="ml-20">
                <tr>
                    <td>5</td>
                    <td>18</td>
                    <td>2</td>
                    <td>1</td>
                </tr>
            </table>

            <hr>

            <p>Usamos o <code>.push()</code> para adicionar valores no final do Array:</p>
            <div class="code">
                <pre>
nums.push(7);
<span class="comentario">// [5, 18, 2, 1, 7]</span>   </pre>
                </pre>
            </div>
            <p class="mt-3">Array <code>nums</code></p>
            <table class="ml-20">
                <tr>
                    <td>5</td>
                    <td>18</td>
                    <td>2</td>
                    <td>1</td>
                    <td class="text-success">7</td>
                </tr>
            </table>

            <hr>

            <p>A propriedade <code>.length</code> irá retornar o tamanho do Array, isto é, a quantidade de valores dentro do Array.</p>
            <div class="code">
                <pre>
nums.length;
<span class="comentario">// Resultado: 5</span>   </pre>
            </div>

            <hr>

            <p>A função <code>.sort()</code> irá ordenar o Array:</p>

            <div class="code">
                <pre>
let numsEmOrdem = nums.sort();
<span class="comentario">// [1, 2, 5, 7, 18]</span>   
                </pre>
            </div>

            <p class="mt-3">Array <code>numsEmOrdem</code></p>
            <table class="ml-20">
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>5</td>
                    <td>7</td>
                    <td>18</td>
                </tr>
            </table>

            <hr>

            <p>Podemos percorrer um Array das seguintes formas:</p>

            <div class="code">
                <pre>
for (let c = 0; c < nums.length; c++) {
    <span class="comentario">// Bloco a ser executado</span>
}</pre>
            </div>

            <div class="code">
                <pre>
for (numero in nums) {
    <span class="comentario">// Bloco a ser executado</span>
}</pre>
            </div>

            <div class="code">
                <pre>
for (numero of nums) {
    <span class="comentario">// Bloco a ser executado</span>
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>