<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Dicionários PHP</h1>
            <p>Arrays Associativos, ou Dicionários, são arrays que usam chaves nomeadas atribuidas a elas</p>

            <div class="code">
                <pre>$array = array(<em>chave</em> => <em>valor</em>, ...)</pre>
            </div>

            <p>Exemplo:</p>

            <div class="code">
                <pre>$idades = array("Peter" => 35, "Ben" => 37);   </pre>
            </div>

            <hr>

            <p>Para percorrer um Array Associativo temos que usar o sinal <code>=></code>:</p>

            <div class="code">
                <pre>
foreach ($idades as $nome => $idade) {   
    echo "$nome tem $idade anos";
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>