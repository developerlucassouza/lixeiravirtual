<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltlabel&gt HTML</h1>
        <p>O <code>label</code> é uma etiqueta que irá se relacionar semanticamente com uma tag <code><a href="input.html">&ltinput&gt</a></code>.</p>
        <p>Para criar essa relação, coloque o id do <code><a href="input.html">&ltinput&gt</a></code> no atributo <code>for</code> do <code>label</code></p>

        <div class="code">
            <pre>
&ltlabel for="inome"&gtNome: &lt/label&gt   
&ltinput type="text" id="inome"&gt</pre>
        </div>

        <div style="margin-left:20px;">
            <label for="inome">Nome: </label>
            <input type="text" id="inome">
        </div>

        <p>Com essa etiqueta, ao clicar no <code>label</code>, o cursor será levado ao <code><a href="input.html">&ltinput&gt</a></code> relacionado.</p>

        <hr>

        <p>Alguns tipos de <code><a href="input.html">&ltinput&gt</a></code> necessitam de <code>label</code> para funcionarem corretamente, como os <code>types</code> <code>checkbox</code> e <code>radio</code></p>

        <div class="code">
            <pre>
&ltinput type="checkbox" id="opt1"> &ltlabel for="opt1">Opção 1&lt/label> &ltbr> 
&ltinput type="checkbox" id="opt2"> &ltlabel for="opt2">Opção 2&lt/label> &ltbr>
&ltinput type="checkbox" id="opt3"> &ltlabel for="opt3">Opção 3&lt/label> &ltbr>

&ltinput type="radio" name="sexo" id="imasc"> &ltlabel for="imasc">Masculino&lt/label> &ltbr>   
&ltinput type="radio" name="sexo" id="ifem"> &ltlabel for="ifem">Feminino&lt/label> &ltbr></pre>    
        </div>

        <div style="margin-left:20px;">
            <input type="checkbox" id="opt1"> <label for="opt1">Opção 1</label> <br>
            <input type="checkbox" id="opt2"> <label for="opt2">Opção 2</label> <br>
            <input type="checkbox" id="opt3"> <label for="opt3">Opção 3</label> <br>
            <br>
            <input type="radio" name="sexo" id="imasc"> <label for="imasc">Masculino</label> <br>
            <input type="radio" name="sexo" id="ifem"> <label for="ifem">Feminino</label> <br>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>