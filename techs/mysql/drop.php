<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>DROP MySQL</h1>
        <p>O comando <code>DROP</code> é utilizado tanto para um Banco de Dados, quanto para uma Tabela.</p>
        <p>Para apagar uma Tabela, use:</p>

        <div class="code">
            <pre>DROP TABLE pessoas;</pre>
        </div>

        <p>E para apagar um Banco de Dados:</p>

        <div class="code">
            <pre>DROP DATABASE dados;</pre>
        </div>

        <p>Abaixo, irei deixar os comandos para recriar o Banco de Dados e a Tabela que fizemos até agora.</p>
        <p>Faça os seus testes com o <code>DROP</code> e use os comandos abaixo para recriar o Banco.</p>

        <div class="code">
            <pre>
CREATE DATABASE dados;

USE dados;

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
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>