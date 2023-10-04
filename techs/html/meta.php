<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltmeta&gt HTML</h1>
        <p>A tag <code>meta</code> é colocada dentro da tag <code><a href="head.php">&lthead&gt</a></code>. Define informações e metadados que não podem ser estabelecidos por outras tags (<code><a href="style.php">&ltstyle&gt</a></code>, <code><a href="title.php">&lttitle&gt</a></code>, <code><a href="script.php">&ltscript&gt</a></code>, <code><a href="link.php">&ltlink&gt</a></code>)</p>

        <hr>

        <h2>Atributos</h2>

        <p>
            <code>charset</code>: Define a codificação de caracteres do documento, normalmente recebe "UTF-8" para aceitar melhor acentuações.
        </p>

        <p>
            <code>content</code>: Fornece os valores dos atributos <code>name</code> ou <code>http-equiv</code>.
        </p>

        <p>
            <code>http-equiv</code>: Define um pragma para alterar o commportammento em servidores e user-agents. O valor do pragma será definido no atributo <code>content</code>
        </p>

        <p>
            <code>name</code>: Define um nome aos metadados do documento.
        </p>

        <p>
            <code>scheme</code>: Define o esquema em que os metadados são sentidos.
        </p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>