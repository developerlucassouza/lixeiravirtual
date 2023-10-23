<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>ID HTML e CSS</h1>
        <p>O ID é uma propriedade utilizada para identificar um único elemento na página.</p>
        <p>Não é permitido que mais de um elemento possuam o mesmo ID.</p>

        <div class="code">
            <pre>&ltp id="principal"&gt[...]&lt/p&gt   </pre>
        </div>

        <p>Com o ID, podemos configurar o CSS apenas daquele elemento, sem precisar utilizar o CSS Inline. Mas a partir do Interno ou Externo.</p>
        <p>Para representar um ID em CSS, usa-se o <code>#</code> seguido do nome do ID.</p>

        <div class="code">
            <pre>
&lthead>
    &ltstyle>
        #principal {
            color: red;
        }
    &lt/style>
&lt/head>

&ltbody>
    &ltp id="principal">Lorem ipsum dolor sit amet consectetur adipisicing elit.&lt/p>   
&lt/body></pre>
        </div>

        <p style="color: red;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <hr>

        <p>Além disso, podemos especificar qual tag estamos trabalhando.</p>

        <div class="code">
            <pre>
p#principal {   
    color: red;
}</pre>
        </div>

        <p>Mas, e se eu precisar repetir o estilo do ID em vários elementos?</p>
        <p>É ai que entra o uso das <a href="classe.php">Classes</a>, que permitem o uso em vários elementos.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>