<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltstyle&gt HTML</h1>
        <p>A tag <code>style</code> é utilizada para criar um <code><a href="../css/index.php">CSS</a></code> interno no seu documento HTML.</p>
        <p>Normalmente é criada dentro da tag <code><a href="head.php">&lthead&gt</a></code>.</p>
        <p>Dentro da tag <code>style</code>, será escrito os comandos de estilização <code><a href="../css/index.php">CSS</a></code>.</p>

        <div class="code">
            <pre>
&lthead&gt
    [...]

    &ltstyle&gt
        * {
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: blue;
        }

        div > p {
            text-decoration: underline;   
        }
    &lt/style&gt
&lt/head&gt</pre>
        </div>

        <p>Para importar um arquivo <code>.css</code> com <code><a href="../css/index.php">CSS</a></code> externo, será preciso usar a tag <code><a href="link.php">&ltlink&gt</a></code>.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>