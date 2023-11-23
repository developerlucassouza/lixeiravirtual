<?php
include_once '../../header.php';
?>

<!-- Modal -->
<div class="modal fade" id="resultado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" id="corModalResultado">
                <h5 class="modal-title" id="exampleModalLabel">Resultado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="txtResultado">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
            </div>
        </div>
    </div>
</div>

<main id="teste" class="container">
    <h2 class="alert alert-light">
        Exercícios de PHP
    </h2>

    <article>
        <img src="../../imgs/logo_php.png" alt=""
            style="display:block; margin: 20px auto; width: 100%; max-width:400px;">
        <p>Bem-vindos à prova que testará seus conhecimentos e habilidades. Este é um momento para demonstrar sua
            compreensão dos conceitos abordados e aplicar as habilidades adquiridas. Lembrem-se, esta avaliação não
            apenas mensura o que você aprendeu, mas também oferece uma oportunidade para reflexão e crescimento. Encarem
            cada questão como um desafio que os impulsionará a superar obstáculos e aprimorar suas capacidades. Boa
            sorte!</p>
    </article>

    <article>
        <p>1. Qual função do PHP é utilizada para imprimir texto na tela?</p>
        <label for="q11"><input type="radio" name="q1" id="q11"> puts</label>
        <label for="q12"><input type="radio" name="q1" id="q12"> display</label>
        <label for="q13"><input type="radio" name="q1" id="q13" class="certa"> echo</label>
        <label for="q14"><input type="radio" name="q1" id="q14"> write</label>
    </article>

    <article>
        <p>2. Como se inicia um bloco de código PHP?</p>
        <label for="q21"><input type="radio" name="q2" id="q21"> &lt?python</label>
        <label for="q22"><input type="radio" name="q2" id="q22" class="certa"> &lt?php</label>
        <label for="q23"><input type="radio" name="q2" id="q23"> &lt?</label>
        <label for="q24"><input type="radio" name="q2" id="q24"> &lt?html</label>
    </article>

    <article>
        <p>3. Qual superglobal é usada para receber dados de um formulário HTML no PHP?</p>
        <label for="q31"><input type="radio" name="q3" id="q31"> $_REQUEST</label>
        <label for="q32"><input type="radio" name="q3" id="q32"> $_DATA</label>
        <label for="q33"><input type="radio" name="q3" id="q33"> $_SESSION</label>
        <label for="q34"><input type="radio" name="q3" id="q34" class="certa"> $_POST</label>
    </article>

    <article>
        <p>4. Como se define uma constante em PHP?</p>
        <label for="q41"><input type="radio" name="q4" id="q41" class="certa"> define()</label>
        <label for="q42"><input type="radio" name="q4" id="q42"> const()</label>
        <label for="q43"><input type="radio" name="q4" id="q43"> var()</label>
        <label for="q44"><input type="radio" name="q4" id="q44"> set()</label>
    </article>

    <article>
        <p>5. Qual função é usada para conectar-se a um banco de dados no PHP?</p>
        <label for="q51"><input type="radio" name="q5" id="q51"> db_connect()</label>
        <label for="q52"><input type="radio" name="q5" id="q52"> connect_db()</label>
        <label for="q53"><input type="radio" name="q5" id="q53"> mysql_connect()</label>
        <label for="q54"><input type="radio" name="q5" id="q54" class="certa"> mysqli_connect()</label>
    </article>

    <article>
        <p>6. O que o operador "===" faz em comparações no PHP?</p>
        <label for="q61"><input type="radio" name="q6" id="q61"> Compara apenas valores.</label>
        <label for="q62"><input type="radio" name="q6" id="q62"> Compara apenas tipos de dados.</label>
        <label for="q63"><input type="radio" name="q6" id="q63" class="certa"> Compara valores e tipos de dados.</label>
        <label for="q64"><input type="radio" name="q6" id="q64"> Realiza uma comparação lógica.</label>
    </article>

    <article>
        <p>7. Qual função é usada para realizar uma requisição HTTP GET no PHP?</p>
        <label for="q71"><input type="radio" name="q7" id="q71"> http_get()</label>
        <label for="q72"><input type="radio" name="q7" id="q72"> curl_get()</label>
        <label for="q73"><input type="radio" name="q7" id="q73"> get_request()</label>
        <label for="q74"><input type="radio" name="q7" id="q74" class="certa"> file_get_contents()</label>
    </article>

    <article>
        <p>8. O que a função "unset()" faz no PHP?</p>
        <label for="q81"><input type="radio" name="q8" id="q81"> Define uma variável.</label>
        <label for="q82"><input type="radio" name="q8" id="q82" class="certa"> Remove uma variável.</label>
        <label for="q83"><input type="radio" name="q8" id="q83"> Limpa o cache do servidor.</label>
        <label for="q84"><input type="radio" name="q8" id="q84"> Encerra a execução do script.</label>
    </article>

    <article>
        <p>9. Como se realiza uma iteração por meio de um array em PHP?</p>
        <label for="q91"><input type="radio" name="q9" id="q91" class="certa"> foreach</label>
        <label for="q92"><input type="radio" name="q9" id="q92"> loop</label>
        <label for="q93"><input type="radio" name="q9" id="q93"> for</label>
        <label for="q94"><input type="radio" name="q9" id="q94"> while_array</label>
    </article>

    <article>
        <p>10. Qual é o operador de concatenação de strings no PHP?</p>
        <label for="q101"><input type="radio" name="q10" id="q101"> +</label>
        <label for="q102"><input type="radio" name="q10" id="q102"> &</label>
        <label for="q103"><input type="radio" name="q10" id="q103" class="certa"> .</label>
        <label for="q104"><input type="radio" name="q10" id="q104"> :</label>
    </article>

    <button class="btn btn-info mb-5" onclick="verResultado()">Ver meu resultado!</button>
</main>

<script type="text/javascript">
    function verResultado() {
        let acertos = (document.querySelectorAll('input[type="radio"]:checked.certa')).length;
        let txt = document.querySelector('#txtResultado');
        txt.innerHTML = `<h3 class="text-center">${acertos}/10</h3>`;

        if (acertos >= 8) {
            $('#corModalResultado').removeClass('bg-success');
            $('#corModalResultado').removeClass('bg-warning');
            $('#corModalResultado').removeClass('bg-danger');

            $('#corModalResultado').addClass('bg-success');
            txt.innerHTML += '<p>Meus parabéns, seu resultado foi excelente!<br>Continue estudando para não perder o ritmo!</p>';
        } else if (acertos >= 6) {
            $('#corModalResultado').removeClass('bg-success');
            $('#corModalResultado').removeClass('bg-warning');
            $('#corModalResultado').removeClass('bg-danger');

            $('#corModalResultado').addClass('bg-warning');
            txt.innerHTML += '<p>Seu resultado está satisfatório.<br>Acesse <a href="http://localhost/lixeiravirtual/techs/php/">Curso de PHP</a> para aprimorar seus resultados.</p>';
        } else {
            $('#corModalResultado').removeClass('bg-success');
            $('#corModalResultado').removeClass('bg-warning');
            $('#corModalResultado').removeClass('bg-danger');
            
            $('#corModalResultado').addClass('bg-danger');
            txt.innerHTML += '<p>Seu resultado está abaixo da média.<br>Acesse <a href="http://localhost/lixeiravirtual/techs/php/">Curso de PHP</a> para melhorar seus resultados.</p>';
        }

        $('#resultado').modal();
    }
</script>

<?php
include_once '../../footer.php';
?>