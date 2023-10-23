<?php
    include_once '../../header.php';
?>

<style>
        div.teste {
            border: 1px solid black;
            margin: auto;
            width: 80%;
        }

        div.quadrado {
            border: 1px solid black;
            height: 200px;
            margin: auto;
            width: 200px;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>border-radius CSS</h1>
        <p>A propriedade <code>border-radius</code> irá criar um arredondamento nos cantos de uma tag <code><a href="../html/index.php">HTML</a></code>.</p>

        <div class="code">
            <pre>border-radius: 20px;</pre>
        </div>
        <div class="teste" style="border-radius: 20px;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit consequatur accusamus voluptatum, molestiae placeat dolores vitae. Perferendis hic temporibus, vero non quis eligendi facilis provident, suscipit, eius ea illum.</p>
        </div>

        <p>Podemos utilizar vários valores para definir cada canto individualmente.</p>

        <div class="code">
            <pre>border-radius: 10px 40px 0px 20px;</pre>
        </div>

        <div class="teste" style="border-radius: 10px 40px 0px 20px;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit consequatur accusamus voluptatum, molestiae placeat dolores vitae. Perferendis hic temporibus, vero non quis eligendi facilis provident, suscipit, eius ea illum.</p>
        </div>

        <hr>

        <p>Utilizando a porcentagem, podemos tranformar um quadrado em um círculo com <code>border-radius</code>.</p>

        <p>Vamos criar o seguinte quadrado:</p>

        <div class="code">
            <pre>
.quadrado {
    border: 1px solid black;   
    height: 200px;
    margin: auto;
    width: 200px;
}</pre>
        </div>

        <div class="quadrado"></div>

        <p>Agora, iremos adicionar um <code>border-radius: 50%;</code>.</p>

        <div class="code">
            <pre>
.quadrado {
    [...]
    border-radius: 50%;
}</pre>
        </div>

        <div class="quadrado" style="border-radius: 50%;"></div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>