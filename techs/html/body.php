<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltbody&gt HTML</h1>
        <p>A tag <code>body</code> representa o corpo do documento HTML. É dentro da tag <code>body</code> que o conteúdo da página HTML é criado.</p>

        <div class="code">
            <pre>
&lthead&gt

    &lttitle&gtTag body&lt/title&gt

&lt/head&gt

&ltbody&gt

    &ltp&gtÉ na tag body que as outras tags semânticas são criadas&lt/p&gt   

&lt/body&gt</pre>
        </div>

        <hr>

        <h2>Atributos da tag &ltbody&gt para chamar funções</h2>
        <p>Exemplo:</p>
        <div class="code">
            <pre>
&ltbody onblur='function()'&gt &lt/body&gt   </pre>
        </div>
        <p><code>onafterprint</code>: Chamar função após a solicitação de impressão do documento.</p>
        <p><code>onbeforeprint</code>: Chamar função ao solicitar impressão do documento.</p>
        <p><code>onbeforeunload</code>: Chamar função quando o documento vai ser descarregado.</p>
        <p><code>onblur</code>: Chamar função quando o documento perde o foco.</p>
        <p><code>onerror</code>: Chamar função ao ocorrer um erro no carregamento do documento.</p>
        <p><code>onfocus</code>: Chamar função quando o documento recebe foco.</p>
        <p><code>onlanguagechange</code>: Chamar função ao trocar os idiomas de preferência.</p>
        <p><code>onload</code>: Chamar função ao final do carregamento do documento.</p>
        <p><code>onmessage</code>: Chamar função quando o documento receber uma mensagem.</p>
        <p><code>onoffline</code>: Chamar função ao falhar a conexão com a internet.</p>
        <p><code>ononline</code>: Chamar função ao restaurar a conexão com a internet.</p>
        <p><code>onresize</code>: Chamar função quando o tamanho do documento for redimensionado</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>