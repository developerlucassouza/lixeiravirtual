<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Selecionando Elementos DOM</h1>
            
            <p>Selecionar elementos no <a href="oqueedom.php">DOM</a> é uma parte essencial da manipulação dinâmica de páginas web usando JavaScript.</p>
            <p>Selecionar elementos <a href="oqueedom.php">DOM</a> nos permite fazer:</p>

            <ul>
                <li>Manipulação Dinâmica</li>
                <li>Atualização de Conteúdo</li>
                <li>Validação de Formulários</li>
                <li>Interação do Usuário</li>
                <li>Atualização de Estilos</li>
                <li>Animações e Transições</li>
                <li>Validação de Acessibilidade</li>
            </ul>

            <hr>

            <p>Existem 5 métodos de selecionar elementos <a href="oqueedom.php">DOM</a>:</p>

            <ul>
                <li>Por ID</li>
                <li>Por Classe</li>
                <li>Por Nome</li>
                <li>Por Marca</li>
                <li>Por Seletor</li>
            </ul>

            <h2>Por ID</h2>
            <p>A maneira mais utilizada para selecionar um elemento em específico é atravéz de <a href="../css/id.php">ID</a>.</p>
            <div class="code">
                <pre>document.getElementById('<em>ID do elemento</em>');   </pre>
            </div>



            <h2>Por Classe</h2>
            <p>Selecionar por classe permite selecionar vários elementos que possuam a mesma classe</p>
            <div class="code">
                <pre>document.getElementsByClassName('<em>Classe do(s) elemento(s)</em>');   </pre>
            </div>



            <h2>Por Nome</h2>
            <p>Selecionar todos os elementos que possuem o mesmo atributo name.</p>
            <p>name é um atributo normalmente utilizado em <code><a href="../php/">PHP</a></code>.</p>
            <div class="code">
                <pre>document.getElementsByName('<em>Nome do(s) elemento(s)</em>');   </pre>
            </div>



            <h2>Por Marca</h2>
            <p>Irá selecionar todas as tags iguais, por exemplo, todas as tags <code>&ltp&gt</code></p>
            <div class="code">
                <pre>document.getElementsByTagName('p');   </pre>
            </div>



            <h2>Por Seletor</h2>
            <p>Este irá englobar a maioria das anteriores, selecinando pelo seletor utilizado também em <code><a href="../css/">CSS</a></code></p>
            <div class="code">
                <pre>
<span class="comentario">// Selecionar p com ID principal</span>
document.querySelector('p#principal');   

<span class="comentario">// Selecionar div com classe grande</span>
document.querySelector('div.grande');

<span class="comentario">// Selecionar p dentro de uma div</span>
document.querySelector('div > p');</pre>
            </div>

            <hr>

            <p>Com isso, podemos ligar o elemento <a href="oqueedom.php">DOM</a> a uma variável.</p>

            <div class="code">
                <pre>let p1 = document.querySelector('p#inicial');   </pre>
            </div>

            <p>Isso nos será muito útil daqui para frente.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>