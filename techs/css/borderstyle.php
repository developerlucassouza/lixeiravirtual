<?php
    include_once '../../header.php';
?>

<style>
        div.borda {
            border: 5px black;
            display: inline-block;
            margin: 10px;
            margin-left: 20px;
            padding: 5px;
            text-align: center;
            width: 100px;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>border-style CSS</h1>
        <p>A propriedade <code>border-style</code> define o tipo de borda que será exibida.</p>

        <div class="code">
            <pre>border-style: <em>valor</em>;</pre>
        </div>

        <p>Veja os tipos de bordas possíveis:</p>

        <div class="borda" style="border-style: none;">none</div>
        <div class="borda" style="border-style: solid;">solid</div>
        <div class="borda" style="border-style: dotted;">dotted</div>
        <div class="borda" style="border-style: dashed;">dashed</div>
        <div class="borda" style="border-style: double;">double</div>
        <div class="borda" style="border-style: groove;">groove</div>
        <div class="borda" style="border-style: ridge;">ridge</div>
        <div class="borda" style="border-style: inset;">inset</div>
        <div class="borda" style="border-style: outset;">outset</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>