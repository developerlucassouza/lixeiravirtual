<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>switch/case JS</h1>
            <p>O <code>switch/case</code> é uma estrutura de controle de fluxo em várias linguagens de programação, incluindo JavaScript. Ele é usado para avaliar uma expressão em comparação com vários casos possíveis e executar o bloco de código correspondente ao caso que corresponde ao valor da expressão.</p>

            <div class="code">
                <pre>
switch (<em>expressão</em>) {
    case <em>valor1</em>:
        <span class="comentario">// Bloco se <em>valor1</em></span>
        break;

    case <em>valor2</em>:
        <span class="comentario">// Bloco se <em>valor2</em></span>
        break;

    case <em>valor3</em>:
        <span class="comentario">// Bloco se <em>valor3</em></span>
        break;
    
    default:
        <span class="comentario">// Bloco se nenhum valor ocorrer</span>   
        break;
}</pre>
            </div>

            <p>O <code>switch/case</code> irá analisar uma expressão (ou variável), executando um bloco dependendo do valor.</p>
            <p>O <code>default</code> será executado caso nenhum <code>case</code> atenda a expressão/variável.</p>
            <p>Ao final de cada bloco <code>case</code> ou <code>default</code>, será preciso colocar um <code>break;</code>.</p>
            <p>No exemplo abaixo, será pedido um número ao usuário via <code><a href="alertconfirmprompt.php">prompt()</a></code> e será mostrado o númeo por extenso via <code><a href="alertconfirmprompt.php">alert()</a></code>.</p>

            <div class="code">
                <pre>
let num = Number(prompt("Digite um número e o veja por extenso:"));   
switch (num) {
    case 0:
        alert("Zero");
        break;

    case 1:
        alert("Um");
        break;

    case 2:
        alert("Dois");
        break;

    case 3:
        alert("Três");
        break;

    case 4:
        alert("Quatro");
        break;

    case 5:
        alert("Cinco");
        break;

    default:
        alert("Número não programado!");
        break;
}</pre>
            </div>

            <button class="btn btn-info" style="margin-left: 20px;" onclick="exemplo1()">
                Ver exemplo
            </button>

            <script type="text/javascript">
                function exemplo1() {
                    let num = Number(prompt("Digite um número e o veja por extenso:"));
                    switch (num) {
                        case 0:
                            alert("Zero");
                            break;

                        case 1:
                            alert("Um");
                            break;

                        case 2:
                            alert("Dois");
                            break;

                        case 3:
                            alert("Três");
                            break;

                        case 4:
                            alert("Quatro");
                            break;

                        case 5:
                            alert("Cinco");
                            break;

                        default:
                            alert("Número não programado!");
                            break;
                    }
                };
            </script>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>