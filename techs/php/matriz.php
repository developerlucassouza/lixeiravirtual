<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Matriz PHP</h1>
            <p>Para criar uma Matriz em PHP, criamos arrays dentro de um array.</p>
            <p>Vamos supor uma Matriz com nome, estoque, e a quantidade vendida de alguns carros:</p>

            <div class="code">
                <pre>
$carros = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)   
);</pre>
            </div>

            <p>Para exibir os valores, usamos dois <code><a href="foreach.php">foreach</a></code>:</p>

            <div class="code">
                <pre>
echo "&lttable>";
foreach ($carros as $linha) {
    echo "&lttr>";
    foreach ($linha as $valor) {
        echo "&lttd>$valor&lt/td>";   
    }
    echo "&lt/tr>";
}
echo "&lt/table>";</pre>
            </div>

            <?php
                $carros = array(
                    array("Volvo", 22, 18),
                    array("BMW", 15, 13),
                    array("Saab", 5, 2),
                    array("Land Rover", 17, 15)   
                );

                echo "<table class='ml-20'>";
                foreach ($carros as $linha) {
                    echo "<tr>";
                    foreach ($linha as $valor) {
                        echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>