<?php
    include_once '../../header.php';
?>

<style type="text/css">
    pre {
        margin-left: 20px;
    }

    div.code pre {
        margin-left: 0px;
    }
</style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltpre&gt HTML</h1>
        <p>A tag <code>pre</code> irá fazer com que o texto no site fique igual ao texto no código, como quebras e espaçamentos.</p>

        <div class="code">
            <pre>
&lt!-- Sem &ltpre&gt --&gt
&ltp&gtOlá,            Mundo!&lt/p&gt
&lt!-- Com &ltpre&gt --&gt
&ltpre&gt&ltp&gtOlá,            Mundo!&lt/p&gt&lt/pre&gt   </pre>
        </div>

        <p>Olá,            Mundo!</p>
        <pre><p>Olá,            Mundo!</p></pre>

        <div class="code">
            <pre>
&lt!-- Sem &ltpre&gt --&gt
&ltp&gt
    Minha
    Vizinha
    Tem
    Muitas
    Jóias
&lt/p&gt
&lt!-- Com &ltpre&gt --&gt
&ltpre&gt
    &ltp&gt
Minha
Vizinha
Tem
Muitas
Jóias
    &lt/p&gt
&lt/pre&gt
            </pre>
        </div>

        <p>
            Minha
            Vizinha
            Tem
            Muitas
            Jóias
        </p>

        <pre><p>Minha
Vizinha
Tem
Muitas
Jóias</p></pre>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>