<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Output JS</h1>
            <p>Em JavaScript, a saída de dados (output) pelo terminal é realizada usando a função <code>console.log()</code>. Essa função envia mensagens para o console do navegador ou terminal, dependendo do ambiente em que o JavaScript está sendo executado.</p>

            <div class="code">
                <pre>console.log('Olá, Mundo!');   </pre>
            </div>

            <div class="output">
                <pre>Olá, Mundo!   </pre>
            </div>

            <p>Se você estiver executando esse código no navegador, pode abrir as Ferramentas do Desenvolvedor (normalmente pressionando F12), ir para a guia "Console" e ver a saída lá.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>