<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>animation-timing-function CSS</h1>
        <p>O <code>animation-timing-function</code> irá definir a aceleração e desaceleração de uma animação <code><a href="keyframes.php">@keyframes</a></code>.</p>

        <div class="code">
            <pre>
.elemento {
    [...]
    animation-timing-function: valor;   
}</pre>
        </div>

        <p>O <code>animation-timing-function</code> pode receber os seguintes valores:</p>
        <p><code><a href="#ease">ease</a></code></p>
        <p><code><a href="#linear">linear</a></code></p>
        <p><code><a href="#ease-in">ease-in</a></code></p>
        <p><code><a href="#ease-out">ease-out</a></code></p>
        <p><code><a href="#ease-in-out">ease-in-out</a></code></p>

        <hr>

        <h2 id="ease">ease</h2>
        <p><code>ease</code> é o valor padrão do <code>animation-timing-function</code>.</p>
        <p>Com este valor, a animação começará devagar, acelera no meio e desacelera no final.</p>
        <p>Normalmente utilizado para criar animações naturais e suaves.</p>
        <div class="code">
            <pre>
.elemento {
    [...]
    animation-timing-function: ease;   
}</pre>
        </div>

        <hr>

        <h2 id="linear">linear</h2>
        <p>Com este valor, a animação terá uma velocidade constante, sem acelerar ou desacelerar.</p>
        <div class="code">
            <pre>
.elemento {
    [...]
    animation-timing-function: linear;   
}</pre>
        </div>

        <hr>

        <h2 id="ease-in">ease-in</h2>
        <p>A animação irá iniciar lentamente, acelarando à medida que avança.</p>
        <div class="code">
            <pre>
.elemento {
    [...]
    animation-timing-function: ease-in;   
}</pre>
        </div>

        <hr>

        <h2 id="ease-out">ease-out</h2>
        <p>A animação começa rápida, desacelerando à medida que avança.</p>
        <div class="code">
            <pre>
.elemento {
    [...]
    animation-timing-function: ease-out;   
}</pre>
        </div>

        <hr>

        <h2 id="ease-in-out">ease-in-out</h2>
        <p>Uma mistura do <code><a href="#ease-in">ease-in</a></code> com o <code><a href="#ease-out">ease-out</a></code>.</p>
        <p>A animação irá começar devagar, acelera no meio, e desacelera no final.</p>
        <div class="code">
            <pre>
.elemento {
    [...]
    animation-timing-function: ease-in-out;   
}</pre>
        </div>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>