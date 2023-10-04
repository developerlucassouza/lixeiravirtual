<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltul&gt HTML</h1>
        <p>A tag <code>ul</code> cria uma lista não ordenada, isto é, uma lista que não possui uma ordem correta.</p>
        <p>Para adicionar cada item da lista é preciso utilizar a tag <code><a href="li.html">&ltli&gt</a></code>.</p>

        <div class="code">
            <pre>
&ltul>
    &ltli>Item 1&lt/li>   
    &ltli>Item 2&lt/li>
    &ltli>Item 3&lt/li>
    &ltli>Item 4&lt/li>
&lt/ul></pre>
        </div>

        <ul style="margin-left:40px;">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
        </ul>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>