<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltli&gt HTML</h1>
        <p>A tag <code>li</code> é um item de lista, utilizado para adicionar itens as listas ordenadas (<code><a href="ol.html">&ltol&gt</a></code>) e nas listas não ordenadas (<code><a href="ul.html">&ltul&gt</a></code>)</p>

        <div class="code">
            <pre>
&ltol>
    &ltli>Item 1&lt/li>
    &ltli>Item 2&lt/li>
    &ltli>Item 3&lt/li>
    &ltli>Item 4&lt/li>
    &ltli>Item 5&lt/li>
&lt/ol>

&ltul>
    &ltli>Item 1&lt/li>
    &ltli>Item 2&lt/li>   
    &ltli>Item 3&lt/li>
    &ltli>Item 4&lt/li>
    &ltli>Item 5&lt/li>
&lt/ul></pre>
        </div>

        <ol style="margin:40px;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
        </ol>

        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
        </ul>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>