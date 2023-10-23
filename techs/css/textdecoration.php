<?php
    include_once '../../header.php';
?>

<style type="text/css">
        div.teste {
            display: inline-block;
            margin: 10px;
        }
    </style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>text-decoration CSS</h1>
        <p>A propriedade <code>text-decoration</code> é utilizada para controlar a decoração de texto, como sublinhado, tachado (linha no meio do texto) e texto piscante. Ela é frequentemente usada para estilizar links (<code><a href="../html/a.php">&lta></a></code>) e outros elementos de texto.</p>

        <div class="code">
            <pre>text-decoration: <em>valor</em>;   </pre>
        </div>

        <hr>

        <p><code>text-decoration</code> pode receber os seguintes valores:</p>

        <div class="teste" style="text-decoration: none;">none (Padrão)</div>
        <div class="teste" style="text-decoration: underline;">underline</div>
        <div class="teste" style="text-decoration: overline;">overline</div>
        <div class="teste" style="text-decoration: line-through;">line-through</div>
        <div class="teste" style="text-decoration: blink;">blink</div>
        <div class="teste" style="text-decoration: initial;">initial</div>
        <div class="teste" style="text-decoration: inherit;">inherit</div>

        <hr>

        <p><code>blink</code> faz o texto piscar intermitentemente (essa opção é menos comum e não é bem suportada em todos os navegadores).</p>
        <p><code>initial</code> define a propriedade como o seu valor inicial, geralmente igual a none.</p>
        <p><code>inherit</code> a propriedade herda o valor de text-decoration do elemento pai.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>