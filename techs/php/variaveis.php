<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Variáveis PHP</h1>
            <p>Variáveis são espaços de armazenamento nomeados que podem conter dados que podem ser manipulados e referenciados em um programa de computador. Em termos simples, as variáveis são como caixas ou etiquetas simbólicas que você usa para armazenar e recuperar informações durante a execução de um programa.</p>
            <p>A utilidade das variáveis está em sua capacidade de armazenar diferentes valores ao longo do tempo e em diferentes situações, permitindo que você escreva programas dinâmicos e flexíveis.</p>
            <p>As variáveis em PHP sempre começam com <code>$</code> (exemplo: $numero).</p>
            <p>Para atribuir um valor a uma variável, usamos o sinal de igual (<code>=</code>). Exemplo:</p>

            <div class="code">
                <pre>
&lt?php
    $nome = 'Lucas';   
?></pre>
            </div>

            <p>Com isso, podemos exibir em um <code><a href="output.php">echo</a></code>, concatenando com um texto:</p>

            <div class="code">
                <pre>
&lt?php
    echo '&ltp>Seja bem-vindo(a), ' . $nome . '&lt/p>';   
?></pre>
            </div>

<?php
    $nome = 'Lucas';
    echo '<p>Seja bem-vindo(a), ' . $nome . '</p>';   
?>

            <hr>

            <p>Uma variável pode armazenar o valor de cálculos aritméticos:</p>

            <div class="code">
                <pre>
&lt?php
    $soma = 3 + 7 + 4;
    echo '&ltp>A soma dos números é ' . $soma . '&lt/p>';
?></pre>
            </div>

            <?php
                $soma = 3 + 7 + 4;
                echo '<p>A soma dos números é ' . $soma . '</p>';
            ?>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>