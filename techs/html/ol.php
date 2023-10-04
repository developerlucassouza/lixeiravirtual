<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltol&gt HTML</h1>
        <p>A tag <code>ol</code> indica uma Lista Ordenada, ou seja, uma lista onde os itens possuem uma ordem específica a ser mostrada.</p>
        <p><Code>ol</Code> apenas criará a Lista Ordenada, para adicionar itens é preciso usar a tag <code><a href="li.php">&ltli&gt</a></code>.</p>

        <div class="code">
            <pre>
&ltol>
    &ltli>Item 1&lt/li>
    &ltli>Item 2&lt/li>   
    &ltli>Item 3&lt/li>
&lt/ol></pre>
        </div>

        <ol style="margin-left:40px;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ol>

        <hr>

        <p>Uma <code>ol</code> também recebe o atributo <code>type</code>, onde podemos mudar o tipo da marcação dos itens. Trocando os números por letras ou números romanos.</p>

        <div class="code">
            <pre>
&ltol type="I">
    &ltli>Item 1&lt/li>
    &ltli>Item 2&lt/li>   
    &ltli>Item 3&lt/li>
&lt/ol></pre>
        </div>

        <p>1 - Números</p>
        <p>A - Letras (Maiúsculas)</p>
        <p>a - Letras (Minúsculas)</p>
        <p>I - Números Romanos (Maiúsculas)</p>
        <p>i - Números Romanos (Minúsculas)</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>