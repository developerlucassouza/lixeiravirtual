<?php
    include_once '../../header.php';
?>

<style>
        div.cursor {
            border: 2px solid black;
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
        <h1>cursor CSS</h1>
        <p>A propriedade <code>cursor</code> é utilizada para especificar o tipo de cursor do mouse que deve ser exibido quando o ponteiro do mouse está sobre um elemento <code><a href="../html/index.php">HTML</a></code>. Essa propriedade permite personalizar a aparência do cursor para indicar ao usuário o comportamento esperado ao interagir com o elemento.</p>

        <div class="code">
            <pre>cursor: <em>valor</em>;</pre>
        </div>

        <p>A propriedade <code>cursor</code> pode receber os seguintes valores:</p>

        <div class="cursor" style="cursor: auto;">auto</div>
        <div class="cursor" style="cursor: pointer;">pointer</div>
        <div class="cursor" style="cursor: default;">default</div>
        <div class="cursor" style="cursor: text;">text</div>
        <div class="cursor" style="cursor: move;">move</div>
        <div class="cursor" style="cursor: not-allowed;">not-allowed</div>
        <div class="cursor" style="cursor: wait;">wait</div>
        <div class="cursor" style="cursor: help;">help</div>
        <div class="cursor" style="cursor: crosshair;">crosshair</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>