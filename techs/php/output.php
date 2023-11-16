<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Output PHP</h1>
            <p>No PHP, a saída (output) é a maneira pela qual você exibe informações para o usuário.</p>
            <p>A função principal para realizar isso é o <code>echo</code>.</p>

            <div class="code">
                <pre>
&lt?php
    echo 'Olá, Mundo!';   
?></pre>
            </div>

            <?php echo 'Olá, Mundo!'; ?>

            <hr>

            <p>Também podemos utilizar tags HTML dentro de um <code>echo</code>:</p>
            
            <div class="code">
                <pre>
&lt?php
    echo '&lth2>Olá, Mundo!&lt/h2>';   
?></pre>
            </div>

            <?php echo '<h2>Olá, Mundo!</h2>'; ?>

            <hr>

            <p>Outra funcionalidade é exibir cálculos matemáticos:</p>

            <div class="code">
                <pre>
&lt?php
    echo 2 + 4;   
?></pre>
            </div>

            <?php echo 2 + 4; ?>

            <hr>

            <p>E podemos concatenar cálculo com texto ou tags HTML utilizando o ponto (<code>.</code>):</p>

            <div class="code">
                <pre>
&lt?php
    echo '&lth3>O resultado é ' . 2 + 6 . '&lt/h3>';   
?></pre>
            </div>

            <?php echo '<h2>O resultado é ' . 2 + 6 . '</h2>'; ?>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>