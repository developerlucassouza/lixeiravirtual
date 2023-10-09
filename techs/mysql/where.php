<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>WHERE MySQL</h1>
        <p>Já que vimos o <code>WHERE</code> em 3 comandos até agora (<code><a href="update.php">UPDATE</a></code>, <code><a href="delete.php">DELETE</a></code> e <code><a href="select.php">SELECT</a></code>), achei que seria interessante apronfundá-lo um pouco mais.</p>
        <p>O comando <code>WHERE</code> dará uma condição para quais Registros serão afetados pelo comando principal.</p>
        <p>Por exemplo, com o <code>WHERE</code> você pode visualizar apenas cadastrados que possuem nacionalidade no Brasil:</p>

        <div class="code">
            <pre>
SELECT * FROM cadastrados
WHERE nacionalidade = 'Brasil';</pre>
        </div>

        <p>O <code>WHERE</code> funciona com condições relacionais, por enquanto vimos ele apenas com =.</p>
        <p>Veja a tabela:</p>

        <div class="scrollx">
            <table>
                <thead>
                    <tr>
                        <th>Símbolo</th>
                        <th>Significado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>=</td>
                        <td>Igual a</td>
                    </tr>
                    <tr>
                        <td>&gt</td>
                        <td>Maior que</td>
                    </tr>
                    <tr>
                        <td>&lt</td>
                        <td>Menor que</td>
                    </tr>
                    <tr>
                        <td>&gt=</td>
                        <td>Maior ou igual a</td>
                    </tr>
                    <tr>
                        <td>&lt=</td>
                        <td>Menor ou igual a</td>
                    </tr>
                    <tr>
                        <td>!= ou &lt&gt</td>
                        <td>Diferente de</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>Vamos supor que quero ver todos aqueles que nasceram antes de 2000:</p>

        <div class="code">
            <pre>
SELECT nome, nascimento FROM cadastrados   
WHERE nascimento &lt '2000-01-01';</pre>
        </div>

        <hr>

        <h2>BETWEEN</h2>
        <p>Também podemos trabalhar com intervalos utilizando o <code>BETWEEN</code>.</p>

        <div class="code">
            <pre>
SELECT * FROM cadastrados
WHERE peso BETWEEN '50' AND '70';</pre>
        </div>

        <p>Assim, será mostrado todos os Registros com peso entre 50 e 70.</p>

        <hr>

        <h2>IN</h2>

        <p>O comando <code>IN</code> irá criar uma pequena lista de valores, e selecioará os Registros que possuem um dos valores.</p>

        <div class="code">
            <pre>
SELECT * FROM cadastrados
WHERE nacionalidade IN ('Brasil', 'Portugal', 'Angola');   </pre>
        </div>

        <p>Será mostrado os registros que possuem nacionalidade 'Brasil', 'Portugal' ou 'Angola'.</p>

        <hr>

        <h2>AND</h2>

        <p>O <code>AND</code> irá pedir duas condições, retornando os Registros que atendem ambas as condições.</p>

        <div class="code">
            <pre>
SELECT * FROM cadastrados
WHERE sexo = 'M' AND altura > '1.70';   </pre>
        </div>

        <p>Este <code><a href="select.php">SELECT</a></code> irá retornar todos os homens com mais de 1.70 de altura.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>