<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltdiv&gt HTML</h1>
        <p>A tag <code>div</code> cria um container genérico, ele não possui estilo padrão.</p>

        <div class="code">
            <pre>
&ltdiv&gtOlá, Mundo!&lt/div&gt   </pre>
        </div>

        <div style="margin-left:20px;">Olá, Mundo!</div>

        <hr>

        <p>Mesmo não possuindo semântica especifica nem estilo próprio, a tag <code>div</code> é uma das mais utilizadas, por ser estilizável, passando seus estilos para as tags dentro dela.</p>

        <div class="code">
            <pre>
&ltstyle&gt
    div.estilos {
        background-color: blue;
        color: orange;
        padding: 10px;
    }
&lt/style&gt

&ltdiv class="estilos"&gt
    &lth2&gtOlá, Mundo!&lt/h2&gt
    &ltp&gtEsse é um exemplo de utilidade do div.&lt/p&gt   
&lt/div&gt</pre>
        </div>

        <style>
            div.estilos {
                background-color: blue;
                color: orange;
                padding: 10px;
            }
        </style>

        <div class="estilos">
            <h2>Olá, Mundo!</h2>
            <p>Esse é um exemplo de utilidade do div.</p>
        </div>

        <hr>

        <p>A tag <code>div</code> só deve ser utilizada quando não houver outro elemento semântico (como <code><a href="article.php">&ltarticle&gt</a></code>, <code><a href="nav.php">&ltnav&gt</a></code>, <code><a href="main.php">&ltmain&gt</a></code>, <code><a href="section.php">&ltsection&gt</a></code>, etc)</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>