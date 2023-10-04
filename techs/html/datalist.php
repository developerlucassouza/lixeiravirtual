<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltdatalist&gt HTML</h1>
        <p>A tag <code>datalist</code> é utilizada para criar opções padrões para um <code><a href="input.html">&ltinput&gt</a></code> do tipo text. Primeiro é preciso criar a lista utilizando a tag <code><a href="option.html">&ltoption&gt</a></code> para cada opção que deseja criar. Depois atribua um <code>id</code> ao <code>datalist</code>.</p>

        <div class="code">
            <pre>
&ltdatalist id="lst"&gt
    &ltoption&gtPython&lt/option&gt
    &ltoption&gtJavascript&lt/option&gt   
    &ltoption&gtPHP&lt/option&gt
    &ltoption&gtJava&lt/option&gt
    &ltoption&gtC#&lt/option&gt
&lt/datalist&gt</pre>
        </div>

        <p>Depois, na tag <code><a href="input.html">&ltinput&gt</a></code> do tipo text, utilize o atributo <code>list</code> para passar o <code>datalist</code> ao <code><a href="input.html">&ltinput&gt</a></code></p>

        <div class="code">
            <pre>
&ltinput type="text" list="lst"&gt   </pre>
        </div>

        <datalist id="lst">
            <option>Python</option>
            <option>Javascript</option>
            <option>PHP</option>
            <option>Java</option>
            <option>C#</option>
        </datalist>
        <input type="text" list="lst" style="margin-left:20px;">
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>