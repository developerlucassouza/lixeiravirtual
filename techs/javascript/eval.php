<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Transformar String em Expressão Aritmética</h1>

            <p>Com a função <code>eval()</code>, pode-se transformar string em expressão aritmética.</p>

            <div class="code">
                <pre>
let expressao = '2 + 3 * 2';
let resultado = eval(expressao);   
alert(resultado);</pre>
            </div>

            <button class="btn btn-secondary ml-20" onclick="
                let expressao = '2 + 3 * 2';
                let resultado = eval(expressao);
                alert(resultado);
            ">Exemplo</button>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>