<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Tag &ltimg&gt HTML</h1>
        <p>A tag <code>img</code> serve para introduzir uma imagem ao seu site.</p>
        <p>Por padrão a tag <code>img</code> irá pedir dois parâmetros. <code>src</code>, que é o caminho para a imagem. E <code>alt</code>, que é uma descrição da imagem que será mostrado caso a imagem não seja carregada.</p>

        <div class="code">
            <pre>
&ltimg src="c#.png" alt="Logo do C#"&gt   </pre>
        </div>

        <img src="../../imgs/logo_csharp.png" alt="" style="margin: 10px 0; margin-left:20px;">

        <div class="code">
            <pre>
&ltimg src="SEM IMAGEM" alt="Logo do C#"&gt   </pre>
        </div>

        <img src="" alt="Logo do C#" style="margin:0px; margin-left:20px;">

        <hr>

        <p>Com o uso de <code><a href="../css/index.php">CSS</a></code>, podemos centralizar uma imagem, utilizando as propriedades <code>display</code> e <code>margin</code>.</p>

        <div class="code">
            <pre>
&ltstyle&gt
    img {
        display: block;   
        margin: auto;
    }
&lt/style&gt</pre>
        </div>

        <img src="../../imgs/logo_csharp.png" alt="" style="display: block; margin:50px auto;">
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>