<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Operadores Relacionais PHP</h1>
            <p>Os Operadores Relacionais em programação são utilizados para comparar dois valores e determinar a relação entre eles. Essas operações retornam valores booleanos, indicando se a comparação é verdadeira ou falsa.</p>

            <div class="scrollx ml-20">
                <table>
                    <tr>
                        <th>Sinal</th>
                        <th>Relação</th>
                        <th>Exemplo</th>
                        <th>Resultado</th>
                    </tr>

                    <tr>
                        <td>==</td>
                        <td>Igual a</td>
                        <td>5 == 2</td>
                        <td>false</td>
                    </tr>

                    <tr>
                        <td>===</td>
                        <td>Identico a</td>
                        <td>5 === 2</td>
                        <td>false</td>
                    </tr>

                    <tr>
                        <td>!= ou <></td>
                        <td>Diferente de</td>
                        <td>5 != 2</td>
                        <td>true</td>
                    </tr>

                    <tr>
                        <td>!==</td>
                        <td>Não identico a</td>
                        <td>5 !=== 2</td>
                        <td>false</td>
                    </tr>

                    <tr>
                        <td>></td>
                        <td>Maior que</td>
                        <td>5 > 2</td>
                        <td>true</td>
                    </tr>

                    <tr>
                        <td>&lt</td>
                        <td>Menor que</td>
                        <td>5 &lt 2</td>
                        <td>false</td>
                    </tr>

                    <tr>
                        <td>>=</td>
                        <td>Maior ou igual a</td>
                        <td>5 >= 2</td>
                        <td>true</td>
                    </tr>

                    <tr>
                        <td>&lt=</td>
                        <td>Menor ou igual a</td>
                        <td>5 &lt= 2</td>
                        <td>false</td>
                    </tr>
                </table>
            </div>

            <p>Há uma pequena diferença entre <code>==</code> e <code>===</code>.</p>
            <p>O <code>==</code> irá analisar se os valores são iguais, independente do tipo dos dados. Permitindo comparar <code>int</code> com <code>string</code>.</p>

            <div class="code">
                <pre>
&lt?php
    $rel = (2 == "2");   
    <span class="comentario">// Resultado: true</span>
?></pre>
            </div>

            <p>Já o <code>===</code> irá comparar os tipos também, necessitando os dados terem os mesmos tipos.</p>

            <div class="code">
                <pre>
&lt?php
    $rel = (2 === "2");   
    <span class="comentario">// Resultado: false</span>
?></pre>
            </div>

            <p>O mesmo vale para <code>!=</code> e <code>!==</code>.</p>

        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/php.js" type="text/javascript"></script>