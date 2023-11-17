<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Funções PHP</h1>
            <p>Em programação, uma função é um bloco de código que realiza uma tarefa específica e pode ser chamado a partir de outro lugar do programa. As funções são uma maneira de organizar e reutilizar código, facilitando a modularização e a manutenção do código.</p>
            <p>Para declarar uma função, usamos a palavra-chave function, veja:</p>

            <div class="code">
                <pre>
function <em>NOME_DA_FUNÇÃO</em>() {   
    <span class="comentario">// Bloco da função</span>
}</pre>
            </div>

            <hr>

            <h2>Procedimento</h2>
            <p>Os procedimentos são funções simples, que executam um determinado bloco de código sempre que é chamado.</p>

            <div class="code">
                <pre>
function exemplo() {
    echo "Olá, Mundo!";
    echo "Seja bem-vindo(a) ao Lixeira Virtual!";
    echo "Aqui você aprenderá muito sobre tecnologia!";   
}

exemplo();</pre>
            </div>

            <hr>

            <h2>Funções</h2>
            <p>Uma função, ao contrário do procedimento, retorna um valor.</p>
            <p>Pode aceitar parâmetros que são utilizados no cálculo do valor de retorno.</p>
            <p>Veja um exemplo da função soma:</p>

            <div class="code">
                <pre>
function soma($x, $y) { <span class="comentario">// $x e $y são as variáveis que serão passadas para a função</span>   
    $soma = $x + $y;
    return $soma; <span class="comentario">// Será retornado o valor da variável $soma</span>
}

$num = soma(3, 7); <span class="comentario">// 3 e 7 são os valores passados, que serão o $x e $y</span>
echo $num;
<span class="comentario">// Resultado: 10</span></pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>