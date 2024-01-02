<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS .innerHTML</h1>

            <p id="inicial"></p>

            <script>
                document.querySelector('p#inicial').innerHTML = 'TEXTOOOO';
            </script>

            <p>Como visto <a href="selecionandoelementosdom.php">anteriormente</a>, podemos selecionar elementos do <a href="oqueedom.php">DOM</a> e atribuí-los a variáveis.</p>

            <div class="code">
                <pre>let p1 = document.querySelector('p#inicial');   </pre>
            </div>

            <p>Mas, utilizando o atributo <code>.innerHTML</code>, podemos alterar o que está escrito dentro do elemento.</p>

            <div class="code">
                <pre>
&ltp>Texto de exemplo que não será utilizado.&lt/p>

&ltscript>
    let elemento = document.querySelector('p#inicial');   
    elemento.innerHTML = 'Texto alterado via DOM.';
&lt/script></pre>
            </div>

            <p>Texto alterado via DOM.</p>

            <hr>

            <p>Também podemos utilizar tags HTML dentro do elemento.</p>

            <div class="code">
                <pre>
&ltp>Texto de exemplo que não será utilizado.&lt/p>

&ltscript>
    let elemento = document.querySelector('p#inicial');   
    elemento.innerHTML = 'Texto &lti>alterado&lti> via &ltb>DOM&lt/b>.';
&lt/script></pre>
            </div>

            <p>Texto <i>alterado<i> via <b>DOM</b>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>