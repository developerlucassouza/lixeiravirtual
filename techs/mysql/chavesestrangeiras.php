<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>Chaves Estrangeiras MySQL</h1>

<p>Uma Chave Estrangeira (ou Foreign Key) é um conceito importante em Bancos de Dados Relacionais, incluindo o MySQL. Ela é usada para estabelecer um relacionamento entre duas Tabelas, onde a Chave Estrangeira em uma tabela referência a Chave Primária (Primary Key) em outra tabela. Isso permite criar uma ligação entre os dados nas duas Tabelas, facilitando consultas e manipulações de dados.</p>

<p>Vamos considerar duas Tabelas: pessoas e commidas.</p>
<p>A Tabela comidas terá os campos id_comida e comida.</p>
<p>A Tabela pessoas terá os campos id_pessoa, nome e comida_favorita (que será a nossa Chave Estrangeira)</p>

<div class="code">
    <pre>
CREATE TABLE comidas (
id_comida int NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id_comida),
nome varchar(30)
);

CREATE TABLE pessoas (
id_pessoa int NOT NULL AUTO_INCREMENT,   
PRIMARY KEY (id_pessoa),
nome varchar(50),
comida_preferida int
);</pre>
</div>

<p>A Coluna comida_favorita recebe valor int pois receberá a <code><a href="primarykey.php">PRIMARY KEY</a></code> da Tabela.</p>

<hr>

<p>Agora, vamos popular ambas as Tabelas.</p>

<div class="code">
    <pre>
INSERT INTO comidas(nome) VALUES
('pizza'),
('hamburguer'),
('pastel'),
('batata frita'),
('lasanha');

INSERT INTO pessoas(nome) VALUES   
('Ana'),
('Bia'),
('João'),
('Pedro'),
('Paulo'),
('Maria'),
('Cristiano');</pre>
</div>

<p>Tendo as Tabelas populadas, vemos que cada comida possui um id e todas as pessoas possuem a Coluna comida_preferida como null.</p>

<div class="code">
    <pre>SELECT * FROM comidas;</pre>
</div>

<div class="scrollx">
    <table class="db">
        <thead>
            <th>id_comida</th>
            <th>nome</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="left">pizza</td>
            </tr>
            <tr>
                <td>2</td>
                <td class="left">hamburguer</td>
            </tr>
            <tr>
                <td>3</td>
                <td class="left">pastel</td>
            </tr>
            <tr>
                <td>4</td>
                <td class="left">batata frita</td>
            </tr>
            <tr>
                <td>5</td>
                <td class="left">lasanha</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="code">
    <pre>SELECT * FROM pessoas;</pre>
</div>

<div class="scrollx">
    <table class="db">
        <thead>
            <th>id_pessoa</th>
            <th>nome</th>
            <th>comida_preferida</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="left">Ana</td>
                <td><em>NULL</em></td>
            </tr>
            <tr>
                <td>2</td>
                <td class="left">Bia</td>
                <td><em>NULL</em></td>
            </tr>
            <tr>
                <td>3</td>
                <td class="left">João</td>
                <td><em>NULL</em></td>
            </tr>
            <tr>
                <td>4</td>
                <td class="left">Pedro</td>
                <td><em>NULL</em></td>
            </tr>
            <tr>
                <td>5</td>
                <td class="left">Paulo</td>
                <td><em>NULL</em></td>
            </tr>
            <tr>
                <td>6</td>
                <td class="left">Maria</td>
                <td><em>NULL</em></td>
            </tr>
            <tr>
                <td>7</td>
                <td class="left">Cristiano</td>
                <td><em>NULL</em></td>
            </tr>
        </tbody>
    </table>
</div>

<hr>

<p>Vamos transformar a Coluna comida_preferida em uma Chave Estrangeira, que será ligada ao id_comida da Tabela comidas.</p>
<p>O comando <code>ADD FOREIGN KEY</code> irá indicar qual Coluna será uma Chave Estrangeira.</p>
<p>O <code>REFERENCES</code> dirá a qual Tabela e qual Coluna será relacionado.</p>

<div class="code">
    <pre>
ALTER TABLE pessoas
ADD FOREIGN KEY (comida_preferida)   
REFERENCES comidas(id_comida);</pre>
</div>

<p>Agora, iremos preencher a coluna comida_preferida com os respectivos ids da Tabela comidas.</p>

<div class="code">
    <pre>
<span class="comentario">#Ana recebe comida_favorita pizza</span>
UPDATE pessoas
SET comida_preferida = 1
WHERE id_pessoa = 1;

<span class="comentario">#Bia recebe comida_favorita batata frita</span>
UPDATE pessoas
SET comida_preferida = 4
WHERE id_pessoa = 2;

<span class="comentario">#João recebe comida_favorita pizza</span>
UPDATE pessoas
SET comida_preferida = 1
WHERE id_pessoa = 3;

<span class="comentario">#Pedro recebe comida_favorita pastel</span>
UPDATE pessoas
SET comida_preferida = 3
WHERE id_pessoa = 4;

<span class="comentario">#Paulo recebe comida_favorita pizza</span>
UPDATE pessoas
SET comida_preferida = 1
WHERE id_pessoa = 5;

<span class="comentario">#Maria recebe comida_favorita hamburguer</span>
UPDATE pessoas
SET comida_preferida = 2
WHERE id_pessoa = 6;

<span class="comentario">#Cristiano recebe comida_favorita lasanha</span>   
UPDATE pessoas
SET comida_preferida = 5
WHERE id_pessoa = 7;</pre>
</div>

<p>Dessa forma, a Coluna comida_favorita da Tabela pessoas estará preenchidoa com o valor da Coluna id_comida da Tabela comidas.</p>

<div class="scrollx">
    <table class="db">
        <thead>
            <th>id_pessoa</th>
            <th>nome</th>
            <th>comida_preferida</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="left">Ana</td>
                <td><em>1</em></td>
            </tr>
            <tr>
                <td>2</td>
                <td class="left">Bia</td>
                <td><em>4</em></td>
            </tr>
            <tr>
                <td>3</td>
                <td class="left">João</td>
                <td><em>1</em></td>
            </tr>
            <tr>
                <td>4</td>
                <td class="left">Pedro</td>
                <td><em>3</em></td>
            </tr>
            <tr>
                <td>5</td>
                <td class="left">Paulo</td>
                <td><em>1</em></td>
            </tr>
            <tr>
                <td>6</td>
                <td class="left">Maria</td>
                <td><em>2</em></td>
            </tr>
            <tr>
                <td>7</td>
                <td class="left">Cristiano</td>
                <td><em>5</em></td>
            </tr>
        </tbody>
    </table>
</div>

<p>Feito a criação e relação da Chave Estrangeira, poderemos fazer um <code><a href="select.php">SELECT</a></code> misturando as duas Tabelas, utilizando o <code><a href="innerjoin.php">INNER JOIN</a></code></p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>