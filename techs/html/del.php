<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltdel&gt HTML</h1>
        <p>A tag <code>del</code> indica um fragmento de um texto que foi deletado, ele é mostrado pelos navegadores com um risco no meio.</p>

        <div class="code">
            <pre>
&ltdel&gtEsse texto foi removido&lt/del&gt   </pre>
        </div>

        <del style="margin-left:20px;">Esse texto foi removido</del>

        <hr>

        <h2>Atributos da tag &ltdel&gt</h2>
        <p><code>cite</code>: Recebe uma URL que leva ao motivo da alteração.</p>
        <p><code>datetime</code>: Indica hora e data da alteração, deve conter data válida e hora em formato de string sendo a hora um valor opcional.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>