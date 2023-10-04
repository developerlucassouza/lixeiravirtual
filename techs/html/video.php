<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltvideo&gt HTML</h1>
        <p>A tag <code>video</code>, como o nome sugere, é utilizada para inserir um vídeo de hospedagem própria.</p>
        <p><code>video</code> é muito semelhante a tag <code><a href="audio.php">&ltaudio&gt</a></code>.</p>
        <p>Para indicar o caminho do vídeo é preciso utilizar o atributo <code>src</code>.</p>
        <p>Também é preciso adicionar o atributo <code>controls</code> para adicionar os controles do vídeo.</p>

        <div class="code">
            <pre>
&ltvideo src="NOME DO ARQUIVO" controls&gt&lt/video&gt   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>