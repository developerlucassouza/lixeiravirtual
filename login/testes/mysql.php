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
        Exercícios de MySQL
    </h2>

    <article>
        <img src="../../imgs/logo_mysql.png" alt=""
            style="display:block; margin: 20px auto; width: 100%; max-width:400px;">
        <p>Bem-vindos à prova que testará seus conhecimentos e habilidades. Este é um momento para demonstrar sua
            compreensão dos conceitos abordados e aplicar as habilidades adquiridas. Lembrem-se, esta avaliação não
            apenas mensura o que você aprendeu, mas também oferece uma oportunidade para reflexão e crescimento. Encarem
            cada questão como um desafio que os impulsionará a superar obstáculos e aprimorar suas capacidades. Boa
            sorte!</p>
    </article>

    <article>
        <p>1. Qual comando é utilizado para criar um novo banco de dados no MySQL?</p>
        <label for="q11"><input type="radio" name="q1" id="q11"> CREATE TABLE</label>
        <label for="q12"><input type="radio" name="q1" id="q12"> ADD DATABASE</label>
        <label for="q13"><input type="radio" name="q1" id="q13"> NEW DATABASE</label>
        <label for="q14"><input type="radio" name="q1" id="q14" class="certa"> CREATE DATABASE</label>
    </article>

    <article>
        <p>2. Qual cláusula é usada para filtrar registros em uma consulta SELECT no MySQL?</p>
        <label for="q21"><input type="radio" name="q2" id="q21" class="certa"> WHERE</label>
        <label for="q22"><input type="radio" name="q2" id="q22"> FILTER</label>
        <label for="q23"><input type="radio" name="q2" id="q23"> SELECT WHERE</label>
        <label for="q24"><input type="radio" name="q2" id="q24"> HAVING</label>
    </article>

    <article>
        <p>3. Como podemos deletar dados de uma tabela no MySQL?</p>
        <label for="q31"><input type="radio" name="q3" id="q31"> REMOVE</label>
        <label for="q32"><input type="radio" name="q3" id="q32" class="certa"> DELETE</label>
        <label for="q33"><input type="radio" name="q3" id="q33"> DROP</label>
        <label for="q34"><input type="radio" name="q3" id="q34"> ERASE</label>
    </article>

    <article>
        <p>4. Qual comando é utilizado para modificar uma tabela existente no MySQL?</p>
        <label for="q41"><input type="radio" name="q4" id="q41"> MODIFY TABLE</label>
        <label for="q42"><input type="radio" name="q4" id="q42"> CHANGE TABLE</label>
        <label for="q43"><input type="radio" name="q4" id="q43" class="certa"> ALTER TABLE</label>
        <label for="q44"><input type="radio" name="q4" id="q44"> UPDATE TABLE</label>
    </article>

    <article>
        <p>5. Qual função é usada para contar o número de registros em uma tabela no MySQL?</p>
        <label for="q51"><input type="radio" name="q5" id="q51" class="certa"> COUNT()</label>
        <label for="q52"><input type="radio" name="q5" id="q52"> NUM()</label>
        <label for="q53"><input type="radio" name="q5" id="q53"> TOTAL()</label>
        <label for="q54"><input type="radio" name="q5" id="q54"> SUM()</label>
    </article>

    <article>
        <p>6. Como podemos realizar a junção de duas tabelas no MySQL?</p>
        <label for="q61"><input type="radio" name="q6" id="q61" class="certa"> JOIN</label>
        <label for="q62"><input type="radio" name="q6" id="q62"> MERGE</label>
        <label for="q63"><input type="radio" name="q6" id="q63"> COMBINE</label>
        <label for="q64"><input type="radio" name="q6" id="q64"> CONNECT</label>
    </article>

    <article>
        <p>7. Qual é a função do comando "DESCRIBE" no MySQL?</p>
        <label for="q71"><input type="radio" name="q7" id="q71"> Exibir a descrição de um banco de dados.</label>
        <label for="q72"><input type="radio" name="q7" id="q72"> Listar todos os registros de uma tabela.</label>
        <label for="q73"><input type="radio" name="q7" id="q73" class="certa"> Descrever a estrutura de uma tabela.</label>
        <label for="q74"><input type="radio" name="q7" id="q74"> Desativar uma tabela.</label>
    </article>

    <article>
        <p>8. O que é um índice no contexto do MySQL?</p>
        <label for="q81"><input type="radio" name="q8" id="q81"> Um tipo de dado especial.</label>
        <label for="q82"><input type="radio" name="q8" id="q82"> Uma tabela temporária.</label>
        <label for="q83"><input type="radio" name="q8" id="q83"> Uma chave primária.</label>
        <label for="q84"><input type="radio" name="q8" id="q84" class="certa"> Uma estrutura que melhora a velocidade de consulta.</label>
    </article>

    <article>
        <p>9. Como podemos ordenar os resultados de uma consulta em ordem decrescente no MySQL?</p>
        <label for="q91"><input type="radio" name="q9" id="q91"> SORT DESC</label>
        <label for="q92"><input type="radio" name="q9" id="q92" class="certa"> ORDER BY DESC</label>
        <label for="q93"><input type="radio" name="q9" id="q93"> DESC ORDER</label>
        <label for="q94"><input type="radio" name="q9" id="q94"> ORDER DESC</label>
    </article>

    <article>
        <p>10. Qual comando é usado para conceder permissões a um usuário no MySQL?</p>
        <label for="q101"><input type="radio" name="q10" id="q101"> ALLOW</label>
        <label for="q102"><input type="radio" name="q10" id="q102"> PERMIT</label>
        <label for="q103"><input type="radio" name="q10" id="q103" class="certa"> GRANT</label>
        <label for="q104"><input type="radio" name="q10" id="q104"> AUTHORIZE</label>
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
            txt.innerHTML += '<p>Seu resultado está satisfatório.<br>Acesse <a href="http://localhost/lixeiravirtual/techs/mysql/">Curso de MySQL</a> para aprimorar seus resultados.</p>';
        } else {
            $('#corModalResultado').removeClass('bg-success');
            $('#corModalResultado').removeClass('bg-warning');
            $('#corModalResultado').removeClass('bg-danger');
            
            $('#corModalResultado').addClass('bg-danger');
            txt.innerHTML += '<p>Seu resultado está abaixo da média.<br>Acesse <a href="http://localhost/lixeiravirtual/techs/mysql/">Curso de MySQL</a> para melhorar seus resultados.</p>';
        }

        $('#resultado').modal();
    }
</script>

<?php
include_once '../../footer.php';
?>