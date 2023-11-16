<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>switch/case PHP</h1>
            <p>O <code>switch/case</code> é uma estrutura de controle de fluxo em várias linguagens de programação, incluindo PHP. Ele é usado para avaliar uma expressão em comparação com vários casos possíveis e executar o bloco de código correspondente ao caso que corresponde ao valor da expressão.</p>

            <div class="code">
                <pre>
switch (<em>expressão</em>) {
    case valor1:
        <span class="comentario">// Bloco se valor1</span>
        break;

    case valor2:
        <span class="comentario">// Bloco se valor2</span>
        break;

    case valor3:
        <span class="comentario">// Bloco se valor3</span>
        break;
    
    default:
        <span class="comentario">// Bloco se nenhum valor ocorrer</span>   
        break;
}</pre>
            </div>

            <p>O <code>switch/case</code> irá analisar uma expressão (ou variável), executando um bloco dependendo do valor.</p>
            <p>O <code>default</code> será executado caso nenhum <code>case</code> atenda a expressão/variável.</p>
            <p>Ao final de cada bloco <code>case</code> ou <code>default</code>, será preciso colocar um <code>break;</code>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>