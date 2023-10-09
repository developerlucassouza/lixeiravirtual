<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>CREATE TABLE MySQL</h1>
        <p>Com o Banco de Dados já criado, agora temos que criar as Tabelas, que irão guardar os Registros.</p>
        <p>Para criar Tabelas, também usaremos o comando CREATE, mas dessa vez o <code>CREATE TABLE</code>, seguido do nome da tabela.</p>

        <div class="code">
            <pre>
CREATE TABLE pessoas (...);</pre>
        </div>

        <p>Dentro dos parênteses, iremos colocar o nome da coluna seguido do Tipo Primitivo.</p>

        <div class="code">
            <pre>
CREATE TABLE pessoas (
    <i>coluna tipo,</i>
    ...
);</pre>
        </div>

        <p>Os Tipos Primitivos estão listados e aprofundados na próxima página, mas por hora, usaremos como base os seguintes tipos:</p>
        <p><code>varchar</code> para textos.</p>
        <p><code>int</code> para números inteiros.</p>
        <p><code>float</code> para números decimais.</p>
        <p><code>date</code> para datas.</p>

        <p>Após alguns Tipos Primitivos, é preciso especificar o máximo de caracteres utilizados.</p>
        <p>No final, também podemos colocar um <code>default charset=utf8</code> para melhorar a compatibilidade com acentuações.</p>
        <p>Assim, podemos criar a tabela pessoas da seguinte forma, com os campos nome, nascimento, sexo, peso, altura e nacionalidade:</p>

        <div class="code">
            <pre>
CREATE TABLE pessoas (
    nome varchar(30),
    nascimento date,
    sexo varchar(1),
    peso float,
    altura float,
    nacionalidade varchar(20)   
)default charset=utf8;</pre>
        </div>

        <hr>

        <h2>NOT NULL</h2>
        <p>O <code>NOT NULL</code> serve para especificar que um campo de preenhimento é obrigatório, ou seja, não pode ser vazio.</p>
        <p>Ele é colocado após o Tipo Primitivo da coluna.</p>

        <div class="code">
            <pre>
CREATE TABLE pessoas (
    nome varchar(30) NOT NULL,
    [...]   
)default charset=utf8;</pre>
        </div>

        <hr>

        <h2>DEFAULT</h2>
        <p>O <code>DEFAULT</code> irá criar um valor padrão, para caso não seja passado nenhum valor.</p>
        <p>Por exemplo, caso não seja inserido a nacionalidade, vamos defini-la como Brasil:</p>

        <div class="code">
            <pre>
CREATE TABLE pessoas (
    [...]
    nacionalidade varchar(20) DEFAULT 'Brasil'   
)default charset=utf8;</pre>
        </div>

        <hr>

        <h2>UNIQUE</h2>
        <p>O atributo <code>UNIQUE</code> faz com que um determinado campo não possa ser repetido, por exemplo, impedir que dois Registros tenham o mesmo nome.</p>
        <p>A Chave Primária possui o <code>UNIQUE</code> por padrão.</p>

        <div class="code">
            <pre>
CREATE TABLE pessoas (
    nome varchar(30) UNIQUE,
    [...]   
)default charset=utf8;</pre>
        </div>

        <hr>

        <h2>UNSIGNED</h2>
        <p><code>UNSIGNED</code>, ou sem sinal, faz com que os números sejam sempre positivos.</p>

        <div class="code">
            <pre>
CREATE TABLE pessoas (
    [...]
    peso float UNSIGNED,
    altura float UNSIGNED,
    [...]   
)default charset=utf8;</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>