<?php
    include_once '../../header.php';
?>

<style>
        p.teste {
            display: block;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>text-transform CSS</h1>
        <p>A propriedade <code>text-transform</code> é utilizada para controlar a transformação do texto em relação às letras maiúsculas e minúsculas. Ela permite que você defina como o texto deve ser capitalizado ou formatado.</p>

        <div class="code">
            <pre>text-transform: <em>valor</em>;   </pre>
        </div>

        <p>Os valores aceitos são: <code>uppercase</code> para letras maiúsculas, <code>lowercase</code> para letras minúsculas, <code>capitalize</code> para texto capitalizado, <code>none</code> para deixar normal e <code>full-width</code> para utilizar toda a largura.</p>

        <p>Vamos considerar o seguinte código <a href="../html/index.php">HTML</a>:</p>

        <div class="code">
            <pre>&ltp>oLá, mUndo!&lt/p></pre>
        </div>

        <p style="font-weight: 600;">uppercase</p>
        <p style="text-transform: uppercase;">oLá, mUndo!</p>
        <p style="font-weight: 600;">lowercase</p>
        <p style="text-transform: lowercase;">oLá, mUndo!</p>
        <p style="font-weight: 600;">capitalize</p>
        <p style="text-transform: capitalize;">oLá, mUndo!</p>
        <p style="font-weight: 600;">none</p>
        <p style="text-transform: none;">oLá, mUndo!</p>
        <p style="font-weight: 600;">full-width</p>
        <p style="text-transform: full-width;">oLá, mUndo!</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>