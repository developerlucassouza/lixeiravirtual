<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS write()</h1>

            <p>O comando <code>write()</code> tem como função escrever algo no documento <code><a href="../html/">HTML</a></code> atravéz de <code><a href="./">JavaScript</a></code>. Veja o seguinte exemplo:</p>

            <div class="code">
                <pre>
&ltp>Abaixo há um texto criado com write()&lt/p>
&ltscript&gt
    document.write('Texto adicionado com JavaScript');   
&lt/script&gt</pre>
            </div>

            <p>Abaixo há um texto criado com write()</p>
            <script>
                document.write('Texto adicionado com JavaScript');
            </script>

            <p>Perceba que vários comandos que modificam o <code><a href="../html/">HTML</a></code> irão iniciar com <code>document.</code>, pois se trata de um comando pertencente ao documento.</p>

            <hr>

            <p>Podemos utilizar tags <code><a href="../html/">HTML</a></code> no <code>write()</code>.</p>

            <div class="code">
                <pre>
&ltscript&gt
    document.write('&lth3>Título adicionado com JavaScript&lt/h3>');   
&lt/script&gt</pre>
            </div>

            <script>
                document.write('<h3>Título adicionado com JavaScript</h3>');
            </script>

            <hr>

            <p>Com isso, podemos usar um <code><a href="ifelse.php">if</a></code> para decidir o que será mostrado e o que não será mostrado:</p>

            <div class="code">
                <pre>
&ltscript>
    let nota = 3;

    if (nota >= 7) {
        document.write('Aprovado!');
    } else if (nota >= 5) {
        document.write('Recuperação!');   
    } else {
        document.write('Reprovado!');
    }
&lt/script></pre>
            </div>

            <script>
                let nota = 3;

                if (nota >= 7) {
                    document.write('<p>Aprovado!</p>');
                } else if (nota >= 5) {
                    document.write('<p>Recuperação!</p>');
                } else {
                    document.write('<p>Reprovado!</p>');
                }
            </script>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>