<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Laço foreach PHP</h1>
            <p>Em programação, especialmente em linguagens como C#, Java e PHP, o <code>foreach</code> é uma estrutura de controle que permite iterar sobre elementos de uma coleção, como <code><a href="arrays.php">arrays</a></code>, sem precisar se preocupar com índices ou detalhes de implementação.</p>
            <p>Em vez de usar um loop tradicional com índices, você simplesmente percorre cada elemento da coleção, um de cada vez. Isso facilita bastante a leitura e escrita de código, tornando-o mais limpo e eficiente.</p>

            <div class="code">
                <pre>
foreach (<em>array</em> as <em>variável</em>) {   
    <span class="comentario">// Bloco a ser executado</span>
}</pre>
            </div>

            <p>No exemplo abaixo, será percorrido o <code>array</code> $numeros:</p>

            <div class="code">
                <pre>
&lt?php
    $numeros = [3, 6, 1, 9, 5];
    
    foreach ($numeros as $num) {   
        echo "&ltp>$num&lt/p>";
    }
?></pre>
            </div>

            <?php
                $numeros = [3, 6, 1, 9, 5];
                foreach ($numeros as $num) {
                    echo "<p>$num</p>";
                }
            ?>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>