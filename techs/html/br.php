<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltbr&gt HTML</h1>
        <p>A tag <code>br</code> cria uma quebra de linha dentro de uma tag de texto.</p>

        <div class="code">
            <pre>
&ltp&gtAprendendo a utlizar &ltbr&gt quebras de linha.&lt/p&gt   </pre>
        </div>

        <p>Aprendendo a utlizar <br> quebras de linha.</p>

        <hr>

        <p>O <code>br</code> também serve para pular linhas entre uma tag e outra. Mas não se deve usar <code>br</code> para criar espaçamentos. Para isso usa-se CSS</p>

        <div class="code">
            <pre>
&ltp&gtParágrafo 1&lt/p&gt
&ltbr&gt &ltbr&gt &ltbr&gt
&ltp&gtParágrafo 2&lt/p&gt   
&ltbr&gt
&ltp&gtParágrafo 3&lt/p&gt</pre>
        </div>

        <p>Parágrafo 1</p>
        <br> <br> <br>
        <p>Parágrafo 2</p>
        <br>
        <p>Parágrafo 3</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>