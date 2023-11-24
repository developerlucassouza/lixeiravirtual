<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltaudio&gt HTML</h1>
        <?php echo $caminho; ?>
        <p>A tag <code>audio</code> serve para adicionar um áudio ao seu site. Utilize o parâmetro <code>src</code> para indicar o caminho do áudio, e adicione na tag a propriedade <code>controls</code> para mostrar os controle do audio.</p>

        <div class="code">
            <pre>
&ltaudio src="windows_xp_startup.mp3" controls&gt&lt/audio&gt   </pre>
        </div>

        <audio src="../../audios/Microsoft Windows XP Startup Sound(MP3_160K).mp3" controls style="margin-left:20px;"></audio>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>