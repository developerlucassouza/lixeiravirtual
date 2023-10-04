<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tags &lth1&gt - &lth6&gt HTML</h1>
        <p>As tag <code>h1</code> indica um título de hierarquia 1 (por isso o nome h1), isto é, um título de maior importância no site.</p>

        <div class="code">
            <pre>
&lth1&gtTítulo de Hierarquia 1&lt/h1&gt   </pre>
        </div>

        <h1 style="text-align: left; margin-left: 20px;">Título de Hierarquia 1</h1>

        <p>Os títulos vão de <code>h1</code> até <code>h6</code>, sendo quanto maior o número, menor o seu grau de hierarquia.</p>

        <div class="code">
            <pre>
&lth1&gtTítulo de Hierarquia 1&lt/h1&gt
&lth2&gtTítulo de Hierarquia 2&lt/h2&gt
&lth3&gtTítulo de Hierarquia 3&lt/h3&gt
&lth4&gtTítulo de Hierarquia 4&lt/h4&gt
&lth5&gtTítulo de Hierarquia 5&lt/h5&gt
&lth6&gtTítulo de Hierarquia 6&lt/h6&gt   </pre>
        </div>

        <div style="margin-left:20px;">
            <h1 style="margin:0; text-align: left;">Título de Hierarquia 1</h1>
            <h2 style="margin:0;">Título de Hierarquia 2</h2>
            <h3>Título de Hierarquia 3</h3>
            <h4>Título de Hierarquia 4</h4>
            <h5>Título de Hierarquia 5</h5>
            <h6>Título de Hierarquia 6</h6>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>