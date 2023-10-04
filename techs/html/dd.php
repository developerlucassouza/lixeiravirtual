<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltdd&gt HTML</h1>
        <p>A tag <code>dd</code> indica o significado de uma lista de definição. Para criar uma lista de definição usamos a tag <code><a href="dl.html">&ltdl&gt</a></code> e a tag <code><a href="dt.html">&ltdt&gt</a></code> para dicionar os dados da lista de definição.</p>

        <div class="code">
            <pre>
&ltdl&gt
    &ltdt&gtComputador&lt/dt&gt
    &ltdd&gtMáquina destinada ao processamento de dados.&lt/dd&gt   
&lt/dl&gt</pre>
        </div>

        <dl style="margin-left:20px;">
            <dt>Computador</dt>
            <dd>Máquina destinada ao processamento de dados.</dd>
        </dl>

        <hr>

        <p>É possível usar vários <code>dd</code> dentro de um <code><a href="dl.html">&ltdl&gt</a></code>.</p>

        <div class="code">
            <pre>
&ltdl&gt
    &ltdt&gtEscrever&lt/dt&gt
    &ltdd&gtRepresentar por meio de caracteres ou escrita.&lt/dd&gt   
    &ltdd&gtExpressar-se por meio de escrita.&lt/dd&gt
&lt/dl&gt</pre>
        </div>

        <dl style="margin-left:20px;">
            <dt>Escrever</dt>
            <dd>Representar por meio de caracteres ou escrita.</dd>
            <dd>Expressar-se por meio de escrita.</dd>
        </dl>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>