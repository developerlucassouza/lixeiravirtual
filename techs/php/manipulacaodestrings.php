<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Manipulação de Strings PHP</h1>
            <p>A manipulação de strings refere-se às operações que você pode realizar em sequências de caracteres (strings). Isso inclui a criação, modificação e extração de informações de strings. Em muitas linguagens de programação, incluindo PHP, existem diversas funções e métodos específicos para facilitar a manipulação de strings.</p>

            <hr>

            <h2>strlen()</h2>
            <p>Retorna o comprimento de uma string.</p>
            <div class="code">
                <pre>
&lt?php
    $frase = 'Olá, Mundo!';   
    echo strlen($frase);
?></pre>
            </div>

            <?php
                $frase = 'Olá, Mundo!';   
                echo '<p>' . strlen($frase) . '</p>';
            ?>



            <hr>

            <h2>str_word_count()</h2>
            <p>Conta quantas palavras há em uma string.</p>

            <div class="code">
                <pre>
&lt?php
    $frase = 'Olá Mundo';   
    echo str_word_count($frase);
?></pre>
            </div>

            <?php
                $frase = 'Olá Mundo';   
                echo '<p>' . str_word_count($frase) . '</p>';
            ?>



            <hr>

            <h2>strrev()</h2>
            <p>Inverte uma string.</p>

            <div class="code">
                <pre>
&lt?php
    $frase = 'Ola, Mundo!';   
    echo strrev($frase);
?></pre>
            </div>

            <?php
                $frase = 'Ola, Mundo!';   
                echo '<p>' . strrev($frase) . '</p>';
            ?>



            <hr>

            <h2>strpos()</h2>
            <p>Procura um valor em uma string, retornando a posição encontrada.</p>
            <p>Retorna <code>false</code> se não encontrar.</p>

            <div class="code">
                <pre>
&lt?php
    $frase = 'Linguagem PHP';   
    echo strpos($frase, 'PHP');
?></pre>
            </div>

            <?php
                $frase = 'Linguagem PHP';   
                echo '<p>' . strpos($frase, 'PHP') . '</p>';
            ?>



            <hr>

            <h2>str_replace()</h2>
            <p>Substitui carateres de uma string.</p>
            <p>No exemplo abaixo, substitui 'Python' por 'PHP'.</p>

            <div class="code">
                <pre>
&lt?php
    $frase = 'Linguagem Python';   
    echo str_replace('Python', 'PHP', $frase);
?></pre>
            </div>

            <?php
                $frase = 'Linguagem Python';   
                echo '<p>' . str_replace('Python', 'PHP', $frase) . '</p>';
            ?>



            <hr>

            <h2>strtolower() e strtoupper()</h2>
            <p>Transformam todas as letras em maiúsculas e minúsculas, respectivamente.</p>

            <div class="code">
                <pre>
&lt?php
    $frase = 'Aprendendo PHP';   
    echo strtolower($frase);
    echo strtoupper($frase);
?></pre>
            </div>

            <?php
                $frase = 'Aprendendo PHP';   
                echo '<p>' . strtolower($frase) . '</p>';
                echo '<p>' . strtoupper($frase) . '</p>';
            ?>



            <hr>

            <h2>ucfirst()</h2>
            <p>Transforma o primeiro caracter da string em maiúscula.</p>

            <div class="code">
                <pre>
&lt?php
    $frase = 'lixeira virtual';   
    echo ucfirst($frase);
?></pre>
            </div>

            <?php
                $frase = 'lixeira virtual';   
                echo '<p>' . ucfirst($frase) . '</p>';
            ?>



            <hr>

            <h2>ucwords()</h2>
            <p>Transforma o primeiro caracter de cada palavra em maiúscula.</p>

            <div class="code">
                <pre>
&lt?php
    $frase = 'lixeira virtual';   
    echo ucwords($frase);
?></pre>
            </div>

            <?php
                $frase = 'lixeira virtual';   
                echo '<p>' . ucwords($frase) . '</p>';
            ?>



            <hr>

            <h2>ltrim(), rtrim() e trim()</h2>
            <p>Removem espaços a esquerda, a direita, e em ambos os lados, respectivamente.</p>

            <div class="code">
                <pre>
&lt?php
    $frase = '      PHP      ';  
    echo $frase; 
    echo ltrim($frase);
    echo rtrim($frase);
    echo trim($frase);
?></pre>
            </div>

            <?php
                $frase = '      PHP      ';   
                echo '<p><pre>|' . $frase . '|</pre></p>';
                echo '<p><pre>|' . ltrim($frase) . '|</pre></p>';
                echo '<p><pre>|' . rtrim($frase) . '|</pre></p>';
                echo '<p><pre>|' . trim($frase) . '|</pre></p>';
            ?>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>