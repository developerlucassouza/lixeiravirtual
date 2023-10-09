<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>CREATE DATABASE MySQL</h1>
        <p>A primeira, e mais importante, coisa a se fazer é criar o Banco de Dados.</p>
        <p>Para criar um novo Banco de Dados, usamos o comando <code>CREATE DATABASE</code>, e em seguida, o nome do Banco de Dados.</p>

        <div class="code">
            <pre>CREATE DATABASE dados;   </pre>
        </div>

        <p>Também podemos adicionar algumas configuração opcionais para fazer com que o Banco de Dados tenha melhor compatibilidade com acentuações.</p>

        <div class="code">
            <pre>
CREATE DATABASE dados
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;   </pre>
        </div>

        <p>Após criado o Banco de Dados, usaremos o comando <code>USE</code> para ativá-lo.</p>
        <p>É preciso ativar o Banco de Dados para criar tabelas e utilizar os demais comandos.</p>

        <div class="code">
            <pre>USE dados;</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>