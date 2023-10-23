<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>animation-direction CSS</h1>
        <p>Esta propriedade é aplicada para elementos que possuem animações criadas com <code><a href="keyframes.php">@keyframes</a></code>.</p>
        <p>O <code>animation-direction</code> é utilizado para indicar a direção da reprodução da animação, ou seja, se a animação será executada no sentido normal, reverso, ou alternando entre normal e reverso.</p>

        <div class="code">
            <pre>
.elemento {
    animation: [...];
    animation-direction: reverse;   
}</pre>
        </div>

        <p>O <code>animation-delay</code> pode receber os seguintes valores:</p>

        <p><code>normal</code>: A animação será executada normalmente (padrão).</p>
        <p><code>reverse</code>: A animação será executada ao contrário do que está programado no <code><a href="keyframes.php">@keyframes</a></code>.</p>
        <p><code>alternate</code>: A animação ficará alternando entre normal e reverse, começando por normal.</p>
        <p><code>alternate-reverse</code>: A animação ficará alternando entre normal e reverse, começando por reverse.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>