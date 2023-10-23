<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>font-variant CSS</h1>
        <p>A propriedade <code>font-variant</code> é utilizada para controlar o uso de variações de fonte em um elemento de texto. Ela permite que você ajuste como certos aspectos do texto são renderizados, como letras maiúsculas, letras pequenas e numerais.</p>

        <div class="code">
            <pre>font-variant: <em>valor</em>;</pre>
        </div>

        <p><code>font-variant</code> aceita os seguintes valores:</p>

        <p><code>normal</code> (padrão): O texto é renderizado com os valores de variação de fonte padrão, sem alterações.</p>
        <p><code>small-caps</code>: Transforma todas as letras minúsculas em letras maiúsculas pequenas, enquanto mantém as letras maiúsculas com sua forma original. Isso cria um efeito de caixa alta pequena.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>