<?php
    include_once '../../header.php';
?>

<style type="text/css">
    blockquote {
        margin-left: 20px;
    }
</style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltblockquote&gt HTML</h1>
        <p>A tag <code>blockquote</code> cria uma citação em bloco, usado para citações grandes e extensas. Para citações menores usa-se a tag <code><a href="q.html">&ltq&gt</a></code>. Ainda usamos o <code>cite</code> para relacionar a citação a um link externo.</p>

        <div class="code">
            <pre>
&ltblockquote cite="https://developerlucassouza.github.io/paixoes.filosoficas/autor/socrates/socrates(7).html"&gt   
    O mundo está repleto de palavras 
    e discursos vazios que 
    não ressoam em vidas concretas
    A hipocrisia e a incoerência 
    são sinais de uma vida 
    que não reflete aquilo que é dito.
    Palavras , lições de moral e 
    exigências vão muito 
    bem para a vida dos outros, mas para 
    si próprios todas as desculpas são válidas.
&lt/blockquote&gt</pre>
        </div>

        <blockquote cite="https://developerlucassouza.github.io/paixoes.filosoficas/autor/socrates/socrates(7).html">
            <p>
                O mundo está repleto de palavras e discursos vazios que não ressoam em vidas concretas
                A hipocrisia e a incoerência são sinais de uma vida que não reflete aquilo que é dito.
                Palavras , lições de moral e exigências vão muito bem para a vida dos outros, mas para si próprios todas as desculpas são válidas.
            </p>
        </blockquote>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>