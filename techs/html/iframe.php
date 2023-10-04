<?php
    include_once '../../header.php';
?>

<style>
        iframe {
            display: block;
            height: 500px;
            margin: auto;
            width: 90%;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltiframe&gt HTML</h1>
        <p>A tag <code>iframe</code> funciona como uma janela a parte dentro do seu site, podendo colocar links internos e externos dentro do iframe.</p>
        <p>O <code>iframe</code> não costuma ser muito utilizado, principalmente por ser uma tag muito específica, ou por questões de segurança.</p>

        <div class="code">
            <pre>
&ltiframe src="https://developerlucassouza.github.io/paixoes.filosoficas/" frameborder="0"&gt&lt/iframe&gt   </pre>
        </div>

        <iframe src="https://developerlucassouza.github.io/paixoes.filosoficas/" frameborder="0"></iframe>

        <hr>

        <p>O <code>iframe</code> é utilizado também ao incorporar um vídeo externo no seu site.</p>

        <hr>

        <p>Também podemos usar a tag <code><a href="a.html">&lta&gt</a></code> para mudar as páginas mostradas no <code>iframe</code>. Primeiro é preciso dar um <code>name</code> ao <code>iframe</code> e depois usar esse nome como <code>target</code> na tag <code><a href="a.html">&lta&gt.</a></code></p>

        <div class="code">
            <pre>
&ltiframe src="[...]" frameborder="0" name="exemplo"&gt&lt/iframe&gt
&lta href="[...]" target="exemplo"&gtAbrir Paixões Filosóficas.&lt/a&gt   
&lta href="[...]" target="exemplo"&gtAbrir Curso em Vídeo&lt/a&g</pre>
        </div>

        <iframe src="https://developerlucassouza.github.io/paixoes.filosoficas/" frameborder="0" name="exemplo"></iframe>
        <a style="margin-left:20px;" href="https://developerlucassouza.github.io/paixoes.filosoficas/" target="exemplo">Abrir Paixões Filosóficas.</a> <br>
        <a style="margin-left:20px;" href="https://www.cursoemvideo.com/" target="exemplo">Abrir Curso em Vídeo</a> <br>

        <hr>

        <p>O uso de iframes não é muito indicado.</p>
        <p>Tal tag pode causar problemas de indexação no Google Bot.</p>
        <p>Não coloque conteúdos importantes no iframe.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>