<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Operadores Lógicos PHP</h1>
            <p>Os Operadores Lógicos são utilizados em programação para realizar operações de lógica booleana entre valores ou expressões. Eles combinam valores booleanos (verdadeiro ou falso) para produzir um resultado booleano.</p>
            <p>Os Operadores Lógicos são:</p>

            <h2>Operador AND/E (&& / and)</h2>
            <p>O Operador AND/E (&& / and) necessita que ambos os valores sejam verdadeiros para retornar verdadeiro.</p>
            <div class="scrollx" style="margin-left: 20px;">
                <table>
                    <tr>
                        <th>Valor 1</th>
                        <th>Operador</th>
                        <th>Valor 2</th>
                        <th>Resultado</th>
                    </tr>

                    <tr>
                        <td>true</td>
                        <td>&& / and</td>
                        <td>true</td>
                        <td class="bg-success">true</td>
                    </tr>

                    <tr>
                        <td>true</td>
                        <td>&& / and</td>
                        <td>false</td>
                        <td class="bg-danger">false</td>
                    </tr>

                    <tr>
                        <td>false</td>
                        <td>&& / and</td>
                        <td>true</td>
                        <td class="bg-danger">false</td>
                    </tr>

                    <tr>
                        <td>false</td>
                        <td>&& / and</td>
                        <td>false</td>
                        <td class="bg-danger">false</td>
                    </tr>
                </table>
            </div>
            <div class="code">
                <pre>
$log = (true && false);
<span class="comentario">// Resultado: false</span>

$log = (true and false);   
<span class="comentario">// Resultado: false</span></pre>
            </div>

            <h2>Operador OR/OU (|| / or)</h2>
            <p>O Operador OR/OU (|| / or) necessita que apenas um dos valores seja verdadeiro para retornar verdadeiro.</p>
            <div class="scrollx" style="margin-left: 20px;">
                <table>
                <tr>
                        <th>Valor 1</th>
                        <th>Operador</th>
                        <th>Valor 2</th>
                        <th>Resultado</th>
                    </tr>

                    <tr>
                        <td>true</td>
                        <td>|| / or</td>
                        <td>true</td>
                        <td class="bg-success">true</td>
                    </tr>

                    <tr>
                        <td>true</td>
                        <td>|| / or</td>
                        <td>false</td>
                        <td class="bg-success">true</td>
                    </tr>

                    <tr>
                        <td>false</td>
                        <td>|| / or</td>
                        <td>true</td>
                        <td class="bg-success">true</td>
                    </tr>

                    <tr>
                        <td>false</td>
                        <td>|| / or</td>
                        <td>false</td>
                        <td class="bg-danger">false</td>
                    </tr>
                </table>
            </div>
            <div class="code">
                <pre>
$log = (true || false);
<span class="comentario">// Resultado: true</span>
$log = (true or false);   
<span class="comentario">// Resultado: true</span>
</pre>
            </div>

            <h2>Operador NOT/NÃO (!)</h2>
            <p>O Operador NOT/NÃO (!) irá inverter o valor lógico.</p>
            <div class="scrollx" style="margin-left: 20px;">
                <table>
                    <tr>
                        <th>Operador</th>
                        <th>Valor</th>
                        <th>Resultado</th>
                    </tr>

                    <tr>
                        <td>!</td>
                        <td>true</td>
                        <td class="bg-danger">false</td>
                    </tr>

                    <tr>
                        <td>!</td>
                        <td>false</td>
                        <td class="bg-success">true</td>
                    </tr>
                </table>
            </div>
            <div class="code">
                <pre>
$log = (!true);   
<span class="comentario">// Resultado: false</span></pre>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>