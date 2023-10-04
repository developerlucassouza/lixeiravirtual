<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltdt&gt HTML</h1>
        <p>A tag <code>dt</code> indica um termo de uma Lista de Definições. Uma Lista de Definições é criada a partir da tag <code><a href="dl.php">&ltdl&gt</a></code>. As definições dos termos das tags <code>dt</code> são adicionadas com a tag <code><a href="dd.php">&ltdd&gt</a></code>.</p>

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

        <p>Caso você tenha múltiplos termos com a mesma definição, a tag <code>dt</code> pode ser repetida.</p>

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
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>