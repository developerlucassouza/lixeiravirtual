<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Operadores Aritméticos PHP</h1>
            <p>Os Operadores Aritméticos em PHP são utilizados para realizar operações matemáticas em valores.</p>
            <p>Os Operadores Aritméticos são:</p>

            <div class="scrollx ml-20">
                <table>
                    <tr>
                        <th>Sinal</th>
                        <th>Cálculo</th>
                        <th>Exemplo</th>
                        <th>Resultado</th>
                    </tr>

                    <tr>
                        <td>+</td>
                        <td>Adição</td>
                        <td>5 + 2</td>
                        <td>7</td>
                    </tr>

                    <tr>
                        <td>-</td>
                        <td>Subtração</td>
                        <td>5 - 2</td>
                        <td>3</td>
                    </tr>

                    <tr>
                        <td>*</td>
                        <td>Multiplicação</td>
                        <td>5 * 2</td>
                        <td>10</td>
                    </tr>

                    <tr>
                        <td>%</td>
                        <td>Resto da divisão</td>
                        <td>5 % 2</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>**</td>
                        <td>Potenciação</td>
                        <td>5 ** 2</td>
                        <td>25</td>
                    </tr>

                    <tr>
                        <td>++</td>
                        <td>Incremento</td>
                        <td>$num++</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>--</td>
                        <td>Decremento</td>
                        <td>$num--</td>
                        <td>-</td>
                    </tr>
                </table>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>