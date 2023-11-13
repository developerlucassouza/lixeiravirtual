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
        Exercícios de HTML
    </h2>

    <article>
        <img src="../../imgs/logo_html.png" alt=""
            style="display:block; margin: 20px auto; width: 100%; max-width:400px;">
        <p>Bem-vindos à prova que testará seus conhecimentos e habilidades. Este é um momento para demonstrar sua
            compreensão dos conceitos abordados e aplicar as habilidades adquiridas. Lembrem-se, esta avaliação não
            apenas mensura o que você aprendeu, mas também oferece uma oportunidade para reflexão e crescimento. Encarem
            cada questão como um desafio que os impulsionará a superar obstáculos e aprimorar suas capacidades. Boa
            sorte!</p>
    </article>

    <article>
        <p>1. Qual tag HTML é utilizada para criar um link em uma página web?</p>
        <label for="q11"><input type="radio" name="q1" id="q11"> &ltlink&gt</label>
        <label for="q12"><input type="radio" name="q1" id="q12"> &lthref&gt</label>
        <label for="q13"><input type="radio" name="q1" id="q13" class="certa"> &lta&gt</label>
        <label for="q14"><input type="radio" name="q1" id="q14"> &lturl&gt</label>
    </article>

    <article>
        <p>2. Qual elemento HTML é usado para criar uma lista não ordenada?</p>
        <label for="q21"><input type="radio" name="q2" id="q21"> &ltlist&gt</label>
        <label for="q22"><input type="radio" name="q2" id="q22" class="certa"> &ltul&gt</label>
        <label for="q23"><input type="radio" name="q2" id="q23"> &ltol&gt</label>
        <label for="q24"><input type="radio" name="q2" id="q24"> &ltli&gt</label>
    </article>

    <article>
        <p>3. O que a tag &ltbr&gt representa em HTML?</p>
        <label for="q31"><input type="radio" name="q3" id="q31" class="certa"> Break</label>
        <label for="q32"><input type="radio" name="q3" id="q32"> Bold</label>
        <label for="q33"><input type="radio" name="q3" id="q33"> Border</label>
        <label for="q34"><input type="radio" name="q3" id="q34"> Bullet</label>
    </article>

    <article>
        <p>4. Qual atributo é comumente utilizado para adicionar um estilo em linha a um elemento HTML?</p>
        <label for="q41"><input type="radio" name="q4" id="q41"> &ltstyle&gt</label>
        <label for="q42"><input type="radio" name="q4" id="q42"> class</label>
        <label for="q43"><input type="radio" name="q4" id="q43" class="certa"> style</label>
        <label for="q44"><input type="radio" name="q4" id="q44"> font</label>
    </article>

    <article>
        <p>5. Como incorporar um vídeo em uma página HTML?</p>
        <label for="q51"><input type="radio" name="q5" id="q51"> &ltmedia type="video/mp4" src="video.mp4"&gt</label>
        <label for="q52"><input type="radio" name="q5" id="q52"> &ltembed video="video.mp4"&gt</label>
        <label for="q53"><input type="radio" name="q5" id="q53"> &ltplay src="video.mp4"&gt</label>
        <label for="q54"><input type="radio" name="q5" id="q54" class="certa"> &ltvideo src="video.mp4"&gt</label>
    </article>

    <article>
        <p>6. Qual tag HTML é utilizada para criar uma tabela?</p>
        <label for="q61"><input type="radio" name="q6" id="q61" class="certa"> &lttable&gt</label>
        <label for="q62"><input type="radio" name="q6" id="q62"> &lttab&gt</label>
        <label for="q63"><input type="radio" name="q6" id="q63"> &ltt&gt</label>
        <label for="q64"><input type="radio" name="q6" id="q64"> &lttr&gt</label>
    </article>

    <article>
        <p>7. O que a tag &lthead&gt geralmente contém em uma página HTML?</p>
        <label for="q71"><input type="radio" name="q7" id="q71"> Conteúdo principal da página</label>
        <label for="q72"><input type="radio" name="q7" id="q72"> Links para outras páginas</label>
        <label for="q73"><input type="radio" name="q7" id="q73" class="certa"> Elementos de estilo e metadados</label>
        <label for="q74"><input type="radio" name="q7" id="q74"> Corpo da página</label>
    </article>

    <article>
        <p>8. Qual elemento HTML é usado para criar um formulário em uma página web?</p>
        <label for="q81"><input type="radio" name="q8" id="q81" class="certa"> &ltform&gt</label>
        <label for="q82"><input type="radio" name="q8" id="q82"> &ltinput&gt</label>
        <label for="q83"><input type="radio" name="q8" id="q83"> &ltsubmit&gt</label>
        <label for="q84"><input type="radio" name="q8" id="q84"> &ltfieldset&gt</label>
    </article>

    <article>
        <p>9. O que a tag &ltarticle&gt representa em HTML5?</p>
        <label for="q91"><input type="radio" name="q9" id="q91"> Uma seção de navegação</label>
        <label for="q92"><input type="radio" name="q9" id="q92" class="certa"> Um artigo independente</label>
        <label for="q93"><input type="radio" name="q9" id="q93"> Um cabeçalho de página</label>
        <label for="q94"><input type="radio" name="q9" id="q94"> Uma lista de itens</label>
    </article>

    <article>
        <p>10. Como criar um comentário em HTML?</p>
        <label for="q101"><input type="radio" name="q10" id="q101"> // Comentário aqui</label>
        <label for="q102"><input type="radio" name="q10" id="q102"> # Comentário aqui</label>
        <label for="q103"><input type="radio" name="q10" id="q103" class="certa"> &lt!-- Comentário aqui --&gt</label>
        <label for="q104"><input type="radio" name="q10" id="q104"> /* Comentário aqui */</label>
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
            txt.innerHTML += '<p>Seu resultado está satisfatório.<br>Acesse <a href="http://localhost/lixeiravirtual/techs/html/">Curso de HTML</a> para aprimorar seus resultados.</p>';
        } else {
            $('#corModalResultado').removeClass('bg-success');
            $('#corModalResultado').removeClass('bg-warning');
            $('#corModalResultado').removeClass('bg-danger');
            
            $('#corModalResultado').addClass('bg-danger');
            txt.innerHTML += '<p>Seu resultado está abaixo da média.<br>Acesse <a href="http://localhost/lixeiravirtual/techs/html/">Curso de HTML</a> para melhorar seus resultados.</p>';
        }

        $('#resultado').modal();
    }
</script>

<?php
include_once '../../footer.php';
?>