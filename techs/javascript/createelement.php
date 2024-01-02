<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Criando Elementos</h1>

            <p>Com o comando <code>creatElement()</code> podemos criar novos elementos <a href="oqueedom.php">DOM</a>, colocando dentro dos parênteses qual tag será criada dentro de aspas.</p>

            <div class="code">
                <pre>let texto = document.createElement('h2');   </pre>   
            </div>

            <p>Depois, será preciso adicionar esse elemento dentro de um outro elemento, como por exemplo no <code>&ltbody></code>, no <code>&ltmain></code> ou qualquer outra tag HTML.</p>

            <div class="code">
                <pre>
<span class="comentario">// Criando elemento</span>
let texto = document.createElement('h2');

<span class="comentario">// Criando um texto para o elemento</span>
texto.innerHTML = 'Tag criada via JavaScript';

<span class="comentario">// Selecionando elemento pai</span>
let corpo = document.querySelector('body');

<span class="comentario">// Colocando elemento criado dentro do elemento pai</span>   
corpo.appendChild(texto);</pre>
            </div>

            <script>
                let ntexto = document.createElement('h2');
                ntexto.innerHTML = 'Tag criada via JavaScript';
                let ncorpo = document.querySelector('main');
                ncorpo.appendChild(ntexto);
            </script>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>