<?php
    include_once '../../header.php';
?>

<style type="text/css">
        div.teste {
            border: 1px solid black;
            display: block;
            margin: 10px auto;
            width: 80%;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>padding CSS</h1>
        <p>A propriedade <code>padding</code> é utilizada para definir o espaçamento entre o conteúdo de um elemento HTML e suas bordas (ou margens). Ela controla a quantidade de espaço vazio dentro do elemento, criando um espaço entre o conteúdo interno e as bordas externas do elemento.</p>

        <div class="code">
            <pre>padding: <em>valor</em>;   </pre>
        </div>

        <p>Veja o mesmo exemplo com e sem <code>padding</code>.</p>

        <div class="teste"><p><strong>Sem padding</strong> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a non commodi veritatis. Quo, obcaecati suscipit unde eum ullam cumque voluptate iusto sunt? Similique, asperiores dolorum veritatis libero illo sed.</p></div>

        <div class="teste" style="padding: 20px;"><p><strong>Com padding de 20px</strong> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum a non commodi veritatis. Quo, obcaecati suscipit unde eum ullam cumque voluptate iusto sunt? Similique, asperiores dolorum veritatis libero illo sed.</p></div>

        <p>O padding é uma propriedade importante para controlar o espaçamento interno de elementos, como caixas de texto, botões e divs, e pode ser usado para ajustar o layout e o espaçamento em uma página da web.</p>

        <hr>

        <p>Cada lado pode ser configurado separadamente:</p>

        <div class="code">
            <pre>
<span class="comentario">/* Todos os lados */   </span>
padding: 20px;</pre>
        </div>

        <div class="code">
            <pre>
<span class="comentario">/* Superior e Inferior, seguido de Direita e Esquerda. */   </span>
padding: 10px 20px;</pre>
        </div>

        <div class="code">
            <pre>
<span class="comentario">/* Na ordem: Superior, Direita, Inferior, Esquerda */   </span>
padding: 20px 3px 10px 10px;</pre>
        </div>

        <p>Ou da seguinte forma:</p>

        <div class="code">
            <pre>
div {
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;   
    padding-left: 20px;
}</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>