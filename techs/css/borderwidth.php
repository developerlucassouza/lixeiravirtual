<?php
    include_once '../../header.php';
?>

<style>
        .borda {
            border-style: solid;
            display: block;
            margin: 20px auto;
            text-align: center;
            width: 30%;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>border-width CSS</h1>
        <p>A propriedade CSS <code>border-width</code> é utilizada para definir a largura da borda de um elemento HTML. Você pode especificar a largura da borda de forma individual para cada lado do elemento (superior, direita, inferior e esquerda) ou definir uma largura única para todos os lados ao mesmo tempo.</p>

        <div class="code">
            <pre>border-width: <em>valor</em>;</pre>
        </div>

        <p>Definindo largura para todos os lados:</p>
        <div class="code">
            <pre>border-width: 5px;</pre>
        </div>

        <p>Definindo cada lado separadamente:</p>
        <div class="code">
            <pre>
.elemento {
    border-top-width: 1px;
    border-right-width: 2px;
    border-bottom-width: 3px;   
    border-left-width: 4px;
}</pre>
        </div>

        <hr>

        <h2>thin, medium e thick</h2>
        <p>Ao invés de utilizar valores numéricos, pode-se utilizar os valores <code>thin</code>, <code>medium</code> e <code>thick</code> ao definir a largura da borda.</p>

        <div class="borda" style="border-width: thin;">thin</div>
        <div class="borda" style="border-width: medium;">medium</div>
        <div class="borda" style="border-width: thick;">thick</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>