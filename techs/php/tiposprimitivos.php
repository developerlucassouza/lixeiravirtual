<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Tipos Primitivos PHP</h1>

            <p>PHP possui vários tipos de dados primitivos, utilizados para armazenar diferentes tipos de informações.</p>

            <div class="scrollx ml-20">
                <table>
                    <tr>
                        <th>Tipo Primitivo</th>
                        <th>Exemplo</th>
                    </tr>

                    <tr>
                        <td>String</td>
                        <td><pre>$frase = 'Olá, Mundo! &ltbr>';</pre></td>
                    </tr>

                    <tr>
                        <td>Inteiro</td>
                        <td><pre>$num = 592;</pre></td>
                    </tr>

                    <tr>
                        <td>Float</td>
                        <td><pre>$num = 3.14;</pre></td>
                    </tr>

                    <tr>
                        <td>Booleano</td>
                        <td><pre>$valor = true;</pre></td>
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