<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>ALTER TABLE MySQL</h1>
        <p>O comando <code>ALTER TABLE</code> serve para alterar a estrutura de uma Tabela.</p>
        <p>Com o <code>ALTER TABLE</code> podemos adicionar, modificar e excluir colunas, renomear a coluna ou a Tabela, e também podemos adicionar a Chave Primária após a criação da coluna.</p>

        <div class="code">
            <pre>
ALTER TABLE pessoas   
<i>alteração</i>;</pre>
        </div>

        <hr>
        <h2>ADD COLUMN</h2>
        <p>O comando <code>ADD COLUMN</code> irá adicionar uma coluna no final, após as demais colunas.</p>
        <div class="code">
            <pre>
ALTER TABLE pessoas
ADD COLUMN email varchar(30);   </pre>
        </div>

        <p>Com o atributo <code>AFTER</code> podemos definir que a nova coluna será criada após uma coluna já existete.</p>
        <div class="code">
            <pre>
ALTER TABLE pessoas
ADD COLUMN email varchar(30) AFTER nome;   </pre>
        </div>

        <p>Ou podemos utilizar o comando <code>FIRST</code> para criar a coluna como primeira coluna.</p>
        <div class="code">
            <pre>
ALTER TABLE pessoas
ADD COLUMN email varchar(30) FIRST;   </pre>
        </div>

        <hr>
        <h2>DROP COLUMN</h2>
        <p>Como já vimos anteriormente, <code><a href="drop.php">DROP</a></code> é utilizado para deletar algo.</p>
        <p>O comando <code>DROP COLUMN</code> é utilizado para deletar uma coluna.</p>
        <div class="code">
            <pre>
ALTER TABLE pessoas
DROP COLUMN email;</pre>
        </div>

        <hr>
        <h2>MODIFY COLUMN</h2>
        <p>Também podemos alterar as colunas já existentes com o <code>MODIFY COLUMN</code>, antes a coluna email foi criada com varchar(30). Vamos alterar para um varchar(50)</p>
        <div class="code">
            <pre>
ALTER TABLE pessoas
MODIFY COLUMN email varchar(50);   </pre>
        </div>

        <hr>
        <h2>CHANGE COLUMN</h2>
        <p>Para renomear uma coluna, usamos o <code>CHANGE COLUMN</code>.</p>
        <p>Primeiro escreva o nome atual da coluna, seguido do novo nome, e no fim o tipo primitivo.</p>
        <div class="code">
            <pre>
ALTER TABLE pessoas
CHANGE COLUMN email e-mail varchar(50);   </pre>
        </div>

        <hr>
        <h2>RENAME TO</h2>
        <p>Para renomear uma Tabela usamos o <code>RENAME TO</code>, colocando logo a frente o novo nome.</p>
        <div class="code">
            <pre>
ALTER TABLE pessoas
RENAME TO cadastrados;</pre>
        </div>

        <hr>
        <h2>ADD PRIMARY KEY ()</h2>
        <p>Caso você tenha criado uma Tabela e se esqueceu de colocar o id como Chave Primária, podemos atribuá-la após a criação da Tabela.</p>
        <div class="code">
            <pre>
ALTER TABLE cadastrados
ADD PRIMARY KEY (id);</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>