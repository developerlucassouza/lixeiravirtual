<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>SELECT MySQL</h1>
        <p>Como vimos anteriormente, podemos utilizar o comando <code>SELECT * FROM</code> para mostrar todos os Registros de uma Tabela.</p>

        <div class="code">
            <pre>SELECT * FROM cadastrados;</pre>
        </div>

        <p>O * indica que será mostrada todas as colunas da Tabela, mas podemos definir exatamente quais colunas irão aparecer.</p>
        <p>Vamos supor que só queremos ver nome, sexo e nacionalidade de uma pessoa:</p>

        <div class="code">
            <pre>SELECT nome, sexo, nacionalidade FROM cadastrados;</pre>
        </div>

        <p>Além disso, não é necessário seguir a mesma ordem da criação da Tabela:</p>

        <div class="code">
            <pre>SELECT altura, nome, nascimento FROM cadastrados;</pre>
        </div>

        <hr>

        <p>Assim como no <code><a href="update.php">UPDATE</a></code> e no <code><a href="delete.php">DELETE</a></code>, podemos utilizar o <code>WHERE</code> para definir quais registros serão mostrados.</p>
        <p>Vamos supor que quero ver apenas quem tem altura maior que 1.60:</p>

        <div class="code">
            <pre>
SELECT * FROM cadastrados
WHERE altura > '1.60';</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>