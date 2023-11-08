<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>Horas e Datas JS</h1>
            <p>Em JavaScript, você pode trabalhar com horas e datas usando o objeto <code>Date()</code>.</p>
            <p>Primeiro, você irá criar o objeto com a classe <code>Date()</code> que irá puxar data e hora atuais.</p>

            <div class="code">
                <pre>let agora = new Date();   </pre>
            </div>

            <p>Depois, podemos extrair as informações que queremos, como dia, ano, minutos, etc.</p>

            <div class="code">
                <pre>
let hora = agora.getHours();
<span class="comentario">// Hora atual</span>

let minutos = agora.getMinutes();   
<span class="comentario">// Minuto atual</span></pre>
            </div>

            <p>Veja o exemplo abaixo, que irá mostrar a data e o horário atual:</p>

            <div class="code">
                <pre>
let agora = new Date();

let horas = agora.getHours();
let minutos = agora.getMinutes();

let dia = agora.getDate();
let mes = agora.getMonth();
let ano = agora.getFullYear();

alert(`Horário: ${horas}:${minutos} \nDia: ${dia}/${mes + 1}/${ano}`);   </pre>
            </div>

            <button class="btn btn-info ml-20" onclick="exemplo1()">Ver Exemplo</button>

            <script type="text/javascript">
                function exemplo1() {
                    let agora = new Date();

                    let horas = agora.getHours();
                    let minutos = agora.getMinutes();

                    let dia = agora.getDate();
                    let mes = agora.getMonth();
                    let ano = agora.getFullYear();

                    alert(`Horário: ${horas}:${minutos} \nDia: ${dia}/${mes + 1}/${ano}`);
                }
            </script>

            <hr>

            <p>Na tabela abaixo você poderá ver os dados que podem ser extraídos:</p>

            <div class="scrollx ml-20">
                <table>
                    <tr>
                        <th>Método</th>
                        <th>Retorno</th>
                        <th>Formato/Retorno</th>
                    </tr>

                    <tr>
                        <td>getFullYear()</td>
                        <td>Ano</td>
                        <td>yyyy</td>
                    </tr>

                    <tr>
                        <td>getMonth()</td>
                        <td>Mês</td>
                        <td>0 - 11</td>
                    </tr>

                    <tr>
                        <td>getDate()</td>
                        <td>Dia</td>
                        <td>1-31</td>
                    </tr>

                    <tr>
                        <td>getDay()</td>
                        <td>Dia da Semana</td>
                        <td>0 - 6</td>
                    </tr>

                    <tr>
                        <td>getHours()</td>
                        <td>Horas</td>
                        <td>0 - 23</td>
                    </tr>

                    <tr>
                        <td>getMinutes()</td>
                        <td>Minutos</td>
                        <td>0 - 59</td>
                    </tr>

                    <tr>
                        <td>getSeconds()</td>
                        <td>Segundos</td>
                        <td>0 - 59</td>
                    </tr>

                    <tr>
                        <td>getMilliseconds()</td>
                        <td>Milissegundos</td>
                        <td>0 - 999</td>
                    </tr>
                </table>
            </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/javascript.js" type="text/javascript"></script>