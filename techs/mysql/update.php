<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>UPDATE MySQL</h1>
        <p>O comando <code>UPDATE</code>, juntamente do <code>WHERE</code>, nos permite alterar um Registro já inserido em uma Tabela.</p>

        <div class="code">
            <pre>
UPDATE <i>tabela</i>
SET <i>coluna</i> = '<i>novo valor</i>'
WHERE <i>condição</i>;</pre>
        </div>

        <p>Na primeira linha, colocaremos o nome da Tabela que iremos alterar o Registro</p>
        <p>Na segunda, colocaremos a coluna que será modificada, seguido do sinal de igual e o novo valor.</p>
        <p>Por último, iremos colocar a condição para atualizar. Só será afetado os dados que possuirem essa condição.</p>

        <p>Por exemplo: na Tabela cadastrados, vamos <i>definir</i> o nascimento como '2000-03-01', <i>onde</i> o id for igual a 3.</p>

        <div class="code">
            <pre>
UPDATE cadastrados
SET nascimento = '2000-03-01'   
WHERE id = '3';</pre>
        </div>

        <hr>

        <h2>LIMIT</h2>
        <p>Como o comando <code>UPDATE</code> pode alterar múltiplos Registros caso seja mal executado, podemos utilizar o <code>LIMIT</code> para definir o número máximo de registros que serão alterados.</p>

        <div class="code">
            <pre>
UPDATE cadastrados
SET nascimento = '2000-03-01'   
WHERE id = '3'
LIMIT 1;</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>