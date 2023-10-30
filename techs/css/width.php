<?php
    include_once '../../header.php';
?>

<style type="text/css">
    .teste {
        background-color: #343A40;
        border: 1px solid black;
        color: white;
        display: block;
        height: 100px;
        line-height: 100px;
        margin-top: 20px;
        margin-left: 20px;
        padding-left: 20px;
    }
</style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>width CSS</h1>
            <p>A propriedade <code>width</code> é utilizada para definir a largura de um elemento. Pode ser aplicada a vários tipos de elementos, como blocos, imagens e tabelas</p>

            <div class="code">
                <pre>width: <em>valor</em>;   </pre>
            </div>

            <p>Exemplos:</p>

            <div class="teste" style="width: 300px;">
                300px
            </div>

            <div class="teste" style="width: 70%;">
                70%
            </div>

            <div class="teste" style="width: 40%;">
                40%
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>