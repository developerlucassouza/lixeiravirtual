<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>INNER JOIN MySQL</h1>

<p>O comando <code>INNER JOIN</code> ou apenas <code>JOIN</code> é utilizado para ligar duas Tabelas.</p>
<p>Considerando o exemplo passado, onde temos as Tabelas pessoas e comidas, onde a Coluna comida_preferida da Tabela pessoas é uma <code><a href="chavesestrangeiras.php">Chave Estrangeira</a></code> relacionada a Coluna id_comida da Tabela comidas.</p>

<p>Para visualizarmos a junção das Tabelas, usaremos o <code>JOIN</code> para indicar qual Tabela será relacionada, e o <code>ON</code> para passar uma condição (que será semelhante ao <code><a href="where.php">WHERE</a></code>)</p>

<div class="code">
    <pre>
SELECT * FROM pessoas
JOIN comidas
ON pessoas.comida_preferida = comidas.id_comida;

<span class="comentario">#Como iremos começar a usar multiplas Tabelas, teremos de especificar a Tabela e os campos</span>
<span class="comentario">#Usamos a estrutura <em>Tabela.Coluna</em></span></pre>
</div>

<div class="scrollx">
    <table class="db">
        <thead>
            <th>id_pessoa</th>
            <th>nome</th>
            <th>comida_preferida</th>
            <th>id_comida</th>
            <th>nome</th>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td class="left">Ana</td>
                <td>1</td>
                <td>1</td>
                <td class="left">pizza</td>
            </tr>

            <tr>
                <td>2</td>
                <td class="left">Bia</td>
                <td>4</td>
                <td>4</td>
                <td class="left">batata frita</td>
            </tr>

            <tr>
                <td>3</td>
                <td class="left">João</td>
                <td>1</td>
                <td>1</td>
                <td class="left">pizza</td>
            </tr>

            <tr>
                <td>4</td>
                <td class="left">Pedro</td>
                <td>3</td>
                <td>3</td>
                <td class="left">pastel</td>
            </tr>

            <tr>
                <td>5</td>
                <td class="left">Paulo</td>
                <td>1</td>
                <td>1</td>
                <td class="left">pizza</td>
            </tr>

            <tr>
                <td>6</td>
                <td class="left">Maria</td>
                <td>2</td>
                <td>2</td>
                <td class="left">hamburguer</td>
            </tr>

            <tr>
                <td>7</td>
                <td class="left">Cristiano</td>
                <td>5</td>
                <td>5</td>
                <td class="left">lasanha</td>
            </tr>
        </tbody>
    </table>
</div>

<p>Como você pode analisar, as três primeiras Colunas são referentes ao <code><a href="select.php">SELECT</a> * FROM pessoas</code>.</p>
<p>As demais colunas são da Tabela comidas, mas apenas aqueles que possuem relação com a Coluna comida_preferida. Tanto é que, em todos os Registros, a Coluna comida_preferida e o id_comida são iguais.</p>

<hr>

<p>Mas o <code>INNER JOIN</code> precisa necessariamente chamar todas as Colunas.</p>
<p>Podemos trocar o <code>*</code> pelas Colunas desejadas.</p>
<p>Lembrando que, ao utilizar o <code>INNER JOIN</code>, precisamos especificar as Tabelas que cada Coluna pertence.</p>
<p>Para isso, use a estrutura <em>Tabela.Coluna</em>.</p>

<div class="code">
    <pre>
SELECT pessoas.nome, comidas.nome FROM pessoas
JOIN comidas
ON pessoas.comida_preferida = comidas.id_comida;   </pre>
</div>

<div class="scrollx">
    <table class="db">
        <thead>
            <th>nome</th>
            <th>nome</th>
        </thead>

        <tbody>
            <tr>
                <td class="left">Ana</td>
                <td class="left">pizza</td>
            </tr>

            <tr>
                <td class="left">Bia</td>
                <td class="left">batata frita</td>
            </tr>

            <tr>
                <td class="left">João</td>
                <td class="left">pizza</td>
            </tr>

            <tr>
                <td class="left">Pedro</td>
                <td class="left">pastel</td>
            </tr>

            <tr>
                <td class="left">Paulo</td>
                <td class="left">pizza</td>
            </tr>

            <tr>
                <td class="left">Maria</td>
                <td class="left">hamburguer</td>
            </tr>

            <tr>
                <td class="left">Cristiano</td>
                <td class="left">lasanha</td>
            </tr>
        </tbody>
    </table>
</div>

<hr>

<p>O <code>INNER JOIN</code> pode ser feito com três ou mais Tabelas, basta aumentar o número de <code>JOIN</code>.</p>
<p>Vamos supor uma Tabela jogos, com <code><a href="primarykey.php">Chave Primária</a></code> id_jogo, e a Tabela pessoas com <code><a href="chavesestrangeiras.php">Chave Estrangeira</a></code> jogo_preferido.</p>

<div class="code">
    <pre>
SELECT pessoas.nome, comidas.nome, jogos.nome FROM pessoas   
JOIN comidas
ON pessoas.comida_preferida = comidas.id_comida
JOIN jogos
ON pessoas.jogo_preferido = jogos.id_jogo;</pre>
</div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>