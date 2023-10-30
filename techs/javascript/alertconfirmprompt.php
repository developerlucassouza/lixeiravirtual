<?php
    include_once '../../header.php';
?>

<style type="text/css">
    a.btn {
        margin-left: 20px;
    }
</style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>alert(), confirm() e prompt() JS</h1>
            <p>Essas três funções são relacionadas a páginas web HTML.</p>

            <hr>

            <p>O <code>alert()</code> irá criar um alerta com o texto que quiser:</p>
            <div class="code">
                <pre>alert('Este é um alert()');   </pre>
            </div>
            <a href="javascript: alert('Este é um alert()');" class="btn btn-secondary mt-3">Chamar alert()</a>

            <hr>

            <p>O <code>confirm()</code> irá criar botões de confirmar e cancelar.</p>
            <div class="code">
                <pre>confirm('Deseja confirmar?');   </pre>
            </div>
            <a href="javascript: confirm('Deseja Confirmar?');" class="btn btn-secondary mt-3">Chamar confirm()</a>
            <p>Podemos pegar um valor booleano a partir de um <code>confirm()</code>.</p>
            <div class="code">
                <pre>var confirma = confirm('Deseja Confirmar?');   </pre>
            </div>

            <hr>

            <p>O <code>prompt()</code> irá receber um valor que o usuário digitar.</p>
            <div class="code">
                <pre>prompt('Insira seu nome');   </pre>
            </div>
            <a href="javascript: var x = prompt('Insira seu nome');" class="btn btn-secondary mt-3">Chamar prompt()</a>
            
            <p>O ideal é guardar o valor do <code>prompt()</code> em uma variável também.</p>
            <div class="code">
                <pre>var nome = prompt('Insira seu nome');   </pre>
            </div>

            <p></p>
        </main>
    </div>
</div>

<script type="text/javascript">
    
</script>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>