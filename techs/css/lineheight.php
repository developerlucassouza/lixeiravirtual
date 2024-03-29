<?php
    include_once '../../header.php';
?>

<style>
        div.teste {
            border: 1px solid black;
            box-sizing: border-box;
            margin: 10px auto;
            padding: 0px 10px;
            width: 80%;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>line-height CSS</h1>
        <p>A propriedade <code>line-height</code> é utilizada para definir a altura da linha em elementos de bloco ou em texto dentro de elementos. Ela controla o espaço vertical entre as linhas de texto em um elemento.</p>

        <div class="code">
            <pre>line-height: 20px;   </pre>
        </div>
        <div class="teste" style="line-height: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, atque. Eius quibusdam architecto harum ab mollitia, laudantium, fuga unde labore vel, enim consectetur. Veniam fuga distinctio odit nihil facilis sed.</div>

        <br>

        <div class="code">
            <pre>line-height: 50px;   </pre>
        </div>
        <div class="teste" style="line-height: 50px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio omnis sed neque magnam pariatur culpa, rerum eius reprehenderit, quam sapiente nostrum aliquam deserunt, quas dignissimos eaque hic! Sint, sunt et?</div>

        <hr>

        <p>O valor da propriedade <code>line-height</code> afeta o espaço entre as linhas de texto e pode ser usado para ajustar a legibilidade e a aparência do texto em seu site.</p>

        <hr>

        <p>Outra utilidade do <code>line-height</code> é alinhar verticalmente um texto dentro de uma <code><a href="../html/div.php">&ltdiv></a></code>.</p>
        <p>Basta colocar o valor de <code>line-height</code> igual a altura (<code><a href="height.php">height</a></code>) da <code><a href="../html/div.php">&ltdiv></a></code>.</p>

        <div class="code">
            <pre>
div {
    height: 200px;   
}</pre>
        </div>

        <div class="code">
            <pre>
div > p {
    line-height: 200px;   
}</pre>
        </div>

        <div class="teste" style="height: 200px;">
            <p style="line-height: 200px;">Utilizando o line-height</p>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>