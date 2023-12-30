<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>O Que é DOM?</h1>

            <p>DOM, ou Document Object Model (Modelo de Objeto de Documento), é uma interface de programação que representa documentos <code><a href="../html/">HTML</a></code> ou <code>XML</code> como uma árvore de objetos. Essa estrutura permite que os programas manipulem dinamicamente a estrutura, o estilo e o conteúdo de documentos, respondendo a eventos e interagindo com o usuário.</p>

            <p>Em termos simples, o DOM converte um documento web em uma estrutura de árvore, onde cada elemento (como tags HTML) é representado como um nó na árvore. Isso facilita a manipulação do conteúdo do documento usando linguagens de programação, como JavaScript.</p>

            <img class="d-block mx-auto" src="imgs/dom-javascript.png" alt="Árvore DOM">

            <p>Por meio do DOM, os desenvolvedores podem criar scripts que dinamicamente alteram o conteúdo da página, respondem a eventos do usuário, modificam estilos e estrutura, e muito mais. É uma parte essencial do desenvolvimento web interativo e é suportado por todos os navegadores modernos.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>