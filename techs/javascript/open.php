<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Abrir uma nova Página</h1>

            <p>Com a função <code>open()</code>, podemos abrir uma nova página utilizando o JavaScript.</p>

            <div class="code">
                <pre>open('<em>url</em>', '<em>target</em>');   </pre>
            </div>

            <p><em><code>target</code> é um atributo de links (<code>&lta></code>) que define se o link será aberto na mesma guia ou em uma nova guia, sendo <code>_self</code> na mesma guia e <code>_blank</code> em uma nova guia.</em></p>

            <p>Exemplo:</p>

            <div class="code">
                <pre>
&ltscript>
    function exemplo1() {
        alert('Exemplo da função open()');   
        alert('Abrindo nova guia');
        open('../../', '_blank');
    }
&lt/script>

&ltbutton onclick="exemplo1()">
    Clique aqui para ir para uma nova guia!
&lt/button></pre>
            </div>

            <script>
                function exemplo1() {
                    alert('Exemplo da função open()');
                    alert('Abrindo nova guia');
                    open('../../', '_blank');
                }
            </script>

            <button class="ml-20 btn btn-primary" onclick="exemplo1()">
                Clique aqui para ir para uma nova guia!
            </button>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>