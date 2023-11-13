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
        Exercícios de CSS
    </h2>

    <article>
        <img src="../../imgs/logo_css.png" alt=""
            style="display:block; margin: 20px auto; width: 100%; max-width:400px;">
        <p>Bem-vindos à prova que testará seus conhecimentos e habilidades. Este é um momento para demonstrar sua
            compreensão dos conceitos abordados e aplicar as habilidades adquiridas. Lembrem-se, esta avaliação não
            apenas mensura o que você aprendeu, mas também oferece uma oportunidade para reflexão e crescimento. Encarem
            cada questão como um desafio que os impulsionará a superar obstáculos e aprimorar suas capacidades. Boa
            sorte!</p>
    </article>

    <article>
        <p>1. Qual propriedade do CSS é usada para alterar a cor do texto em um elemento HTML?</p>
        <label for="q11"><input type="radio" name="q1" id="q11"> text-color</label>
        <label for="q12"><input type="radio" name="q1" id="q12"> font-color</label>
        <label for="q13"><input type="radio" name="q1" id="q13" class="certa"> color</label>
        <label for="q14"><input type="radio" name="q1" id="q14"> text-style</label>
    </article>

    <article>
        <p>2. Como você define a largura de um elemento usando CSS?</p>
        <label for="q21"><input type="radio" name="q2" id="q21"> size</label>
        <label for="q22"><input type="radio" name="q2" id="q22" class="certa"> width</label>
        <label for="q23"><input type="radio" name="q2" id="q23"> length</label>
        <label for="q24"><input type="radio" name="q2" id="q24"> dimensions</label>
    </article>

    <article>
        <p>3. Qual seletor CSS é usado para estilizar todos os elementos de uma lista não ordenada?</p>
        <label for="q31"><input type="radio" name="q3" id="q31" class="certa"> ul</label>
        <label for="q32"><input type="radio" name="q3" id="q32"> li</label>
        <label for="q33"><input type="radio" name="q3" id="q33"> list</label>
        <label for="q34"><input type="radio" name="q3" id="q34"> unordered-list</label>
    </article>

    <article>
        <p>4. Qual propriedade CSS é usada para definir a fonte de um texto?</p>
        <label for="q41"><input type="radio" name="q4" id="q41"> text-font</label>
        <label for="q42"><input type="radio" name="q4" id="q42" class="certa"> font-family</label>
        <label for="q43"><input type="radio" name="q4" id="q43"> text-family</label>
        <label for="q44"><input type="radio" name="q4" id="q44"> font-type</label>
    </article>

    <article>
        <p>5. Como você centraliza um elemento na tela horizontalmente em CSS?</p>
        <label for="q51"><input type="radio" name="q5" id="q51"> align: center;</label>
        <label for="q52"><input type="radio" name="q5" id="q52"> horizontal-align: center;</label>
        <label for="q53"><input type="radio" name="q5" id="q53" class="certa"> margin: auto;</label>
        <label for="q54"><input type="radio" name="q5" id="q54"> center: true;</label>
    </article>

    <article>
        <p>6. Qual propriedade é usada para adicionar espaçamento entre as letras de um texto?</p>
        <label for="q61"><input type="radio" name="q6" id="q61" class="certa"> letter-spacing</label>
        <label for="q62"><input type="radio" name="q6" id="q62"> text-spacing</label>
        <label for="q63"><input type="radio" name="q6" id="q63"> spacing</label>
        <label for="q64"><input type="radio" name="q6" id="q64"> font-spacing</label>
    </article>

    <article>
        <p>7. Qual unidade de medida é usada para dimensionar elementos em relação à largura do viewport?</p>
        <label for="q71"><input type="radio" name="q7" id="q71"> px</label>
        <label for="q72"><input type="radio" name="q7" id="q72"> em</label>
        <label for="q73"><input type="radio" name="q7" id="q73" class="certa"> vw</label>
        <label for="q74"><input type="radio" name="q7" id="q74"> %</label>
    </article>

    <article>
        <p>8. Como você define a cor de fundo de um elemento usando CSS?</p>
        <label for="q81"><input type="radio" name="q8" id="q81" class="certa"> background-color</label>
        <label for="q82"><input type="radio" name="q8" id="q82"> color-background</label>
        <label for="q83"><input type="radio" name="q8" id="q83"> element-color</label>
        <label for="q84"><input type="radio" name="q8" id="q84"> bg-color</label>
    </article>

    <article>
        <p>9. Qual seletor CSS é usado para estilizar um link não visitado?</p>
        <label for="q91"><input type="radio" name="q9" id="q91"> link</label>
        <label for="q92"><input type="radio" name="q9" id="q92"> a:visited</label>
        <label for="q93"><input type="radio" name="q9" id="q93" class="certa"> a:link</label>
        <label for="q94"><input type="radio" name="q9" id="q94"> visited</label>
    </article>

    <article>
        <p>10. Como você faz um elemento ter cantos arredondados em CSS?</p>
        <label for="q101"><input type="radio" name="q10" id="q101"> border-style: round;</label>
        <label for="q102"><input type="radio" name="q10" id="q102" class="certa"> border-radius: 10px;</label>
        <label for="q103"><input type="radio" name="q10" id="q103"> corner-radius: 10px;</label>
        <label for="q104"><input type="radio" name="q10" id="q104"> rounded: true;</label>
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
            txt.innerHTML += '<p>Seu resultado está satisfatório.<br>Acesse <a href="http://localhost/lixeiravirtual/techs/css/">Curso de CSS</a> para aprimorar seus resultados.</p>';
        } else {
            $('#corModalResultado').removeClass('bg-success');
            $('#corModalResultado').removeClass('bg-warning');
            $('#corModalResultado').removeClass('bg-danger');
            
            $('#corModalResultado').addClass('bg-danger');
            txt.innerHTML += '<p>Seu resultado está abaixo da média.<br>Acesse <a href="http://localhost/lixeiravirtual/techs/css/">Curso de CSS</a> para melhorar seus resultados.</p>';
        }

        $('#resultado').modal();
    }
</script>

<?php
include_once '../../footer.php';
?>