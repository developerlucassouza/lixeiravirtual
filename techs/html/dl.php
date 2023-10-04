<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltdl&gt HTML</h1>
        <p>A tag <code>dl</code> é utilizada para criar uma Lista de Definições, isto é, uma lista com termos e suas respectivas descrições.</p>
        <p><code>dl</code> apenas indica uma Lista de Definições. Para adicionar os termos e as definições usamos as tags <code><a href="dt.php">&ltdt&gt</a></code> e <code><a href="dd.php">&ltdd&gt</a></code>.</p>
        <p><code><a href="dt.php">&ltdt&gt</a></code> para adicionar os termos.</p>
        <p><code><a href="dd.php">&ltdd&gt</a></code> para adicionar as definições.</p>

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

        <p>Em uma Lista de Definições, podemos ter vários termos para uma descrição, ou várias descrições para um termo.</p>

        <div class="code">
            <pre>
&ltdl&gt
    &ltdt&gtCastigo&lt/dt&gt
    &ltdt&gtPunição&lt/dt&gt
    &ltdd&gtPena que se inflinge a uma pessoa ou animal.&lt/dd&gt   
&lt/dl&gt</pre>
        </div>

        <dl style="margin-left:20px;">
            <dt>Castigo</dt>
            <dt>Punição</dt>
            <dd>Pena que se inflinge a uma pessoa ou animal.</dd>
        </dl>

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