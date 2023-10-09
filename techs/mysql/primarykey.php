<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Primary Key no MySQL</h1>
        <p>Primary Key, ou Chave Primária, é o campo utilizado para identificar Registros, por tanto, ele não pode se repetir.</p>
        <p>Normalmente, a Chave Primária um id do tipo <code>int</code>.</p>
        <p>Também adicionamos o atributo <code>AUTO_INCREMENT</code>, que vai fazer com que o campo id seja preenchido automaticamente a cada Registro inserido, aumentando seu valor de 1 em 1.</p>

        <div class="code">
            <pre>
CREATE TABLE pessoas (
    id INT NOT NULL AUTO_INCREMENT,   
    [...]
)default charset=utf8;</pre>
        </div>

        <p>Para definir uma coluna como Chave Primária, usamos a função <code>primary key()</code>.</p>
        <p>Como a coluna é a id, no final do <code><a href="createtable.php">CREATE TABLE</a></code> iremos adicionar a linha <code>primary key(id)</code></p>
        <p>Com isso, nosso <code><a href="createtable.php">CREATE TABLE pessoas</a></code> ganhou duas linhas: <code> id NOT NULL AUTO_INCREMENT</code> e <code>primary key(id)</code>, ficando da seguinte forma:</p>
        
        <div class="code">
            <pre>
CREATE TABLE pessoas (
    id INT NOT NULL AUTO_INCREMENT,
    nome varchar(30) NOT NULL,
    nascimento date,
    sexo varchar(1),
    peso float,
    altura float,
    nacionalidade varchar(20) DEFAULT 'Brasil',   
    primary key(id)
)default charset=utf8;</pre>
        </div>

        <p>Após todas essas passagens, podemos executar o comando acima.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>