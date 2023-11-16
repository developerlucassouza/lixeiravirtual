<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Home PHP</h1>
            <img src="../../imgs/logo_php.png" alt="" style="display:block; margin:auto; width: 100%; max-width:400px;">
            <p>PHP (Hypertext Preprocessor) é uma linguagem de programação de código aberto, especialmente adequada para o desenvolvimento web e que pode ser embutida diretamente no HTML. Ela é executada no servidor, o que significa que o código PHP é processado no servidor antes de ser enviado para o navegador do usuário.</p>
            <p>O PHP é comumente usado para criar aplicativos web dinâmicos, processar formulários, gerenciar sessões de usuário, criar sistemas de gerenciamento de conteúdo (CMS), e muito mais. Ele desempenha um papel crucial no desenvolvimento web e é uma escolha popular para muitos projetos online.</p>
            <p>Por padrão, o arquivo PHP aceita HTML, para escrever código PHP, será preciso colocar dentro de uma tag de PHP:</p>
            <div class="code">
                <pre>
&lt?php
    <span class="comentario">// Código PHP</span>   
?></pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>