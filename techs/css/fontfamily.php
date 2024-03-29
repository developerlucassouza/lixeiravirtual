<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>font-family CSS</h1>
        <p>A propriedade <code>font-family</code> é usada para definir a família de fontes que deve ser aplicada a um elemento <code>HTML</code>.</p>
        <p>A família de fontes determina quais fontes serão usadas para exibir o texto dentro do elemento, e o navegador tentará usar a primeira fonte da lista que esteja disponível no sistema do usuário. Se a primeira fonte não estiver disponível, o navegador passará para a próxima na lista e assim por diante.</p>

        <div class="code">
            <pre>font-family: <em>valor</em>, <em>valor</em>, <em>valor</em>, <em>valor</em>   </pre>
        </div>

        <p>A propriedade <code>font-family</code> aceita uma lista de fontes separadas por vírgulas e, em geral, você deve especificar várias fontes em sua lista, com uma fonte genérica (como "sans-serif" ou "serif") no final da lista para fornecer uma opção de fallback caso nenhuma das fontes específicas esteja disponível no sistema do usuário.</p>

        <p>Para a criação de sites, é aconselhavel utilizar fontes não-serifadas (sans-serif), que facilita a leitura em telas.</p>

        <div class="code">
            <pre>font-family: Arial, Helvetica, sans-serif;   </pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>