<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>JS Eventos DOM</h1>

            <p>Eventos DOM são interações do usuário ou alterações no estado da página que o navegador pode detectar e lidar, isto é, tudo aquilo que pode acontecer com um elemento.</p>
            <p>Exemplo: clicar, colocar o mouse em cima, apertar uma teclas, etc.</p>
            <p>Com isso, podemos executar ações para determinados eventos que podem acontecer, vamos exemplificar com um evento de click:</p>

            <div class="scrollx">
                <table class="ml-20">
                    <tr>
                        <th>Evento</th>
                        <th>Ação</th>
                    </tr>

                    <tr>
                        <td>click</td>
                        <td>Ao clicar no elemento</td>
                    </tr>
                </table>
            </div>

            <div class="code">
                <pre>&ltp onclick="alert('Você clicou aqui');">Clique aqui!&lt/p>   </pre>
            </div>

            <p onclick="alert('Você clicou!!!');">Clique aqui!</p>

            <hr>

            <p>Mesmo o evento se chamando <code>click</code>, ao usa-lo diretamente no <code>HTML</code>, devemos utilizar o <code>on</code> antes, ficando assim <code>onclick</code>.</p>
            <p>Todos os eventos escritos dentro da tag HTML necessita do <code>on</code>, veja um exemplo com o evento <code>mouseenter</code>:</p>

            <div class="scrollx">
                <table class="ml-20">
                    <tr>
                        <th>Evento</th>
                        <th>Ação</th>
                    </tr>

                    <tr>
                        <td>mouseenter</td>
                        <td>Ao colocar o mouse dentro do elemento</td>
                    </tr>
                </table>
            </div>

            <div class="code">
                <pre>&ltp onmouseenter="alert('Evento acionado!');">Passe o mouse aqui&lt/p>   </pre>
            </div>

            <p onmouseenter="alert('Evento acionado!');">Passe o mouse aqui</p>

            <hr>

            <p>Também podemos atribuir os eventos pelo JavaScript utilizando a função <code>.addEventListener()</code> e uma <a href="funcoes.php">função</a> com as ações que desejamos.</p>

            <div class="code">
                <pre><em>elemento</em>.addEventListener('<em>evento</em>', <em>função</em>);   </pre>
            </div>

            <p>Exemplo:</p>

            <div class="code">
                <pre>
&ltscript>
    <span class="comentario">// Função para chamar o alert()</span>
    function acao() {
        alert('Evento acionado!!!');
    }
&lt/script>

&ltp id="exemplo1">
    Clique aqui para ver o exemplo!
&lt/p>

&ltscript>
    <span class="comentario">// Selecionando elemento</span>
    let paragrafo = document.querySelector('p#exemplo1');

    <span class="comentario">// Adicionando evento</span>
    paragrafo.addEventListener('click', acao);
&lt/script></pre>
            </div>

<script>
    function acao() {
        alert('Evento acionado!!!');
    }
</script>

<p id="exemplo1">
    Clique aqui para ver o exemplo!
</p>

<script>
    let paragrafo = document.querySelector('p#exemplo1');
    paragrafo.addEventListener('click', acao);
</script>

        <hr>

        <h2>Lista de Eventos</h2>
        <p>Para ver todos os eventos, acesse <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/Events">MDN Web Docs - Event Reference</a>.</p>

        <div class="scrollx ml-20">
            <table>
                <tr>
                    <th>Evento</th>
                    <th>Ação</th>
                </tr>

                <tr>
                    <td>click</td>
                    <td>Ao clicar no elemento</td>
                </tr>

                <tr>
                    <td>mouseenter</td>
                    <td>Ao colocar o mouse dentro do elemento</td>
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