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
        <img src="../../imgs/logo_javascript.png" alt=""
            style="display:block; margin: 20px auto; width: 100%; max-width:400px;">
        <p>Bem-vindos à prova que testará seus conhecimentos e habilidades. Este é um momento para demonstrar sua
            compreensão dos conceitos abordados e aplicar as habilidades adquiridas. Lembrem-se, esta avaliação não
            apenas mensura o que você aprendeu, mas também oferece uma oportunidade para reflexão e crescimento. Encarem
            cada questão como um desafio que os impulsionará a superar obstáculos e aprimorar suas capacidades. Boa
            sorte!</p>
    </article>

    <article>
        <p>1. Como você declara uma variável em JavaScript?</p>
        <label for="q11"><input type="radio" name="q1" id="q11"> set myVar = 10;</label>
        <label for="q12"><input type="radio" name="q1" id="q12"> const myVar = 10;</label>
        <label for="q13"><input type="radio" name="q1" id="q13"> variable myVar = 10;</label>
        <label for="q14"><input type="radio" name="q1" id="q14" class="certa"> let myVar = 10;</label>
    </article>

    <article>
        <p>2. Qual operador é usado para comparar tanto o valor quanto o tipo de duas variáveis em JavaScript?</p>
        <label for="q21"><input type="radio" name="q2" id="q21"> ==</label>
        <label for="q22"><input type="radio" name="q2" id="q22" class="certa"> ===</label>
        <label for="q23"><input type="radio" name="q2" id="q23"> =</label>
        <label for="q24"><input type="radio" name="q2" id="q24"> !=</label>
    </article>

    <article>
        <p>3. Como você faz um loop que executa um bloco de código enquanto uma condição é verdadeira em JavaScript?</p>
        <label for="q31"><input type="radio" name="q3" id="q31"> for</label>
        <label for="q32"><input type="radio" name="q3" id="q32"> repeat</label>
        <label for="q33"><input type="radio" name="q3" id="q33" class="certa"> while</label>
        <label for="q34"><input type="radio" name="q3" id="q34"> if</label>
    </article>

    <article>
        <p>4. Qual função é usada para imprimir algo no console em JavaScript?</p>
        <label for="q41"><input type="radio" name="q4" id="q41"> display()</label>
        <label for="q42"><input type="radio" name="q4" id="q42"> log()</label>
        <label for="q43"><input type="radio" name="q4" id="q43"> print()</label>
        <label for="q44"><input type="radio" name="q4" id="q44" class="certa"> console.log()</label>
    </article>

    <article>
        <p>5. O que o método Array.push() faz em JavaScript?</p>
        <label for="q51"><input type="radio" name="q5" id="q51"> Remove o último elemento de um array.</label>
        <label for="q52"><input type="radio" name="q5" id="q52"> Cria um novo array vazio.</label>
        <label for="q53"><input type="radio" name="q5" id="q53"> Inverte a ordem dos elementos em um array.</label>
        <label for="q54"><input type="radio" name="q5" id="q54" class="certa"> Adiciona um elemento ao final de um array.</label>
    </article>

    <article>
        <p>6. Qual é a diferença entre let e const na declaração de variáveis em JavaScript?</p>
        <label for="q61"><input type="radio" name="q6" id="q61"> let é usado para constantes, e const para variáveis mutáveis.</label>
        <label for="q62"><input type="radio" name="q6" id="q62"> let é para variáveis de escopo global, e const para variáveis locais.</label>
        <label for="q63"><input type="radio" name="q6" id="q63" class="certa"> let permite reatribuição, enquanto const cria variáveis imutáveis.</label>
        <label for="q64"><input type="radio" name="q6" id="q64"> Não há diferença entre eles.</label>
    </article>

    <article>
        <p>7. Como você referencia o primeiro elemento de um array em JavaScript?</p>
        <label for="q71"><input type="radio" name="q7" id="q71" class="certa"> array[0]</label>
        <label for="q72"><input type="radio" name="q7" id="q72"> array.first()</label>
        <label for="q73"><input type="radio" name="q7" id="q73"> array.first</label>
        <label for="q74"><input type="radio" name="q7" id="q74"> array.element(0)</label>
    </article>
    
    <article>
        <p>8. Qual método é usado para converter uma string para um número em JavaScript?</p>
        <label for="q81"><input type="radio" name="q8" id="q81"> toNumber()</label>
        <label for="q82"><input type="radio" name="q8" id="q82"> parseNumber()</label>
        <label for="q83"><input type="radio" name="q8" id="q83" class="certa"> Number()</label>
        <label for="q84"><input type="radio" name="q8" id="q84"> convertToNumber()</label>
    </article>

    <article>
        <p>9. O que é o DOM em JavaScript?</p>
        <label for="q91"><input type="radio" name="q9" id="q91"> Uma linguagem de programação.</label>
        <label for="q92"><input type="radio" name="q9" id="q92" class="certa"> Um modelo de objeto para interagir com elementos HTML.</label>
        <label for="q93"><input type="radio" name="q9" id="q93"> Uma estrutura de dados para armazenar valores.</label>
        <label for="q94"><input type="radio" name="q9" id="q94"> Uma biblioteca popular de JavaScript.</label>
    </article>

    <article>
        <p>10. Qual declaração é usada para criar uma função em JavaScript?</p>
        <label for="q101"><input type="radio" name="q10" id="q101" class="certa"> function myFunction() {}</label>
        <label for="q102"><input type="radio" name="q10" id="q102"> create function myFunction() {}</label>
        <label for="q103"><input type="radio" name="q10" id="q103"> new function myFunction() {}</label>
        <label for="q104"><input type="radio" name="q10" id="q104"> def myFunction() {}</label>
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