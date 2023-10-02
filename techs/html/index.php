<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens">
            
        </div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Home HTML</h1>
        <img src="../../imgs/logo_html.png" alt="" style="display:block; margin:auto; width: 100%; max-width:400px;">
        <p>O HTML (sigla para HyperText Markup Language) é um dos componentes base para o desenvolvimento web, permitindo que um navegador leia e traduza marcações de textos e outras mídias para uma página web.</p>
        <p>No Visual Studio Code, para gerar a estrutura base de um arquivo HTML, digita-se ! e aperta Enter.</p>
        <div class="code">
            <pre>
&lt!DOCTYPE html&gt   
&lthtml lang="en"&gt   
&lthead&gt   
    &ltmeta charset="UTF-8"&gt   
    &ltmeta http-equiv="X-UA-Compatible" [...]&gt   
    &ltmeta name="viewport" [...]&gt   
    &lttitle&gtDocument&lt/title&gt   
&lt/head&gt   
&ltbody&gt   
    &lt!-- O código principal é escrito aqui --&gt   
&lt/body&gt   
&lt/html&gt   </pre>
        </div>

        <p>Para comentar em HTML usamos &lt!--  e  --&gt.</p>

        <div class="code">
            <pre>&lt!-- Este é um comentário em HTML --&gt   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/html.js" type="text/javascript"></script>