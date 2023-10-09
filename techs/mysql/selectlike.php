<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>SELECT LIKE MySQL</h1>
        <p>Ao utilizar o comando <code><a href="select.php">SELECT</a></code>, podemos usar o <code>LIKE</code> como um parâmetro do <code><a href="where.php">WHERE</a></code>.</p>
        <p>Por exemplo, imagine que queremos visualizar todos os Registros onde o campo nome comece com M. Veja:</p>
        <div class="code">
            <pre>
SELECT * FROM cadastrados   
WHERE nome LIKE 'M%';</pre>
        </div>

        <p>O <code>LIKE</code> significa "parecido", e a porcentagem nesse caso indica "nenhum, um ou vários caracteres.</p>
        <p>Podemos usar o <code>%</code> em qualquer lugar da pesquisa.</p>

        <div class="code">
            <pre>
SELECT * FROM cadastrados   
WHERE nome LIKE '%s%';</pre>
        </div>

        <p>Assim, será retornado os Registros que possuem a letra em 's' em qualquer lugar do campo nome.</p>
        
        <hr>

        <p>Também podemos usar o <code>NOT LIKE</code>, que irá retornar os Registros que não são parecidos.</p>
        <p>Vamos retornar todos os Registros cujo o nome não começa com L.</p>

        <div class="code">
            <pre>
SELECT * FROM cadastrados   
WHERE nome NOT LIKE 'L%';</pre>
        </div>

        <hr>

        <p>Também pode-se utilizar o underline (<code>_</code>), que irá exigir um (e apenas um caracter naquela posição).</p>

        <div class="code">
            <pre>
SELECT * FROM cadastrados   
WHERE nome LIKE 'Lui_';</pre>
        </div>

        <p>Nesse caso, será obrigatório haver um caracter naquela posição, mas se houver mais de um, não será retornado.</p>
        <p>- Lui (Não será retornado)</p>
        <p>- Luiz (Será retornado)</p>
        <p>- Luisa (Não será retornado)</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/mysql.js" type="text/javascript"></script>