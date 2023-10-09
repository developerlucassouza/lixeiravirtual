<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>INSERT INTO MySQL</h1>
        <p>Agora que temos o Banco e a Tabela criados, vamos utilizar o <code>INSERT INTO</code> para inserir os dados e criar Registros.</p>

        <div class="code">
            <pre>
INSERT INTO <i>tabela</i>(<i>coluna1</i>, <i>coluna2</i>, ...)   
VALUES (<i>dado1</i>, <i>dado2</i>, ...);</pre>
        </div>

        <p>Dentro do primeiro parênteses, será colocado o nome das colunas que iremos inserir os dados.</p>
        <p>Como o id é <code>AUTO_INCREMENT</code>, não precisamos colocá-lo.</p>
        <p>No segundo parentêses, iremos colocar os dados na mesma ordem dos parênteses da coluna.</p>
        <p>Ao inserir dados em MySQL temos que colocá-los entre aspas simples.</p>

        <div class="code">
            <pre>
INSERT INTO pessoas(nome, nascimento, sexo, peso, altura, nacionalidade)   
VALUES ('Lucas', '2000-12-09', 'M', '80.0', '1.74', 'Brasil');</pre>
        </div>

        <p>Perceba que uma data em MySQL é inserida com a estrutura 'yyyy-mm-dd', isto é, primeiro o ano, depois o mês, e por último o dia, todos separados por um traço (-)</p>

        <hr>

        <p>Caso não se lembre, a coluna nacionalidade foi criada com um valor <code>DEFAULT</code>, isto é, um valor padrão.</p>
        <p>Podemos utilizar esse valor apenas escrevendo <code>DEFAULT</code> no campo de inserir a nacionalidade.</p>

        <div class="code">
            <pre>
INSERT INTO pessoas(nome, nascimento, sexo, peso, altura, nacionalidade)   
VALUES ('Lucas', '2000-12-09', 'M', '80.0', '1.74', DEFAULT);</pre>
        </div>

        <hr>

        <h2>Mostrando os Dados</h2>
        <p>Podemos utilizar o comando <code><a href="select.php">SELECT</a></code> para visualizar os dados já inseridos.</p>
        <p>Para mostrar todos os dados:</p>

        <div class="code">
            <pre>SELECT * FROM pessoas;</pre>
        </div>

        <p>O comando <code><a href="select.php">SELECT</a></code> será melhor explorado posteriormente.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>