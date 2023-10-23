<?php
    include_once '../../header.php';
?>

<style type="text/css">
    button {
        margin-left: 20px;
        padding: 0px 20px;
    }

    .quadrado {
        background-color: red;
        height: 100px;
        margin: 20px;
        transition-duration: 1s;
        width: 100px;
    }
</style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>transform CSS</h1>
            <p>A propriedade <code>transform</code> é utilizada para aplicar transformações a um elemento. Ela permite que você altere a posição, rotação, escala e inclinação de um elemento.</p>

            <div class="code">
                <pre>transform: <em>propriedade</em>(<em>valor</em>);</pre>
            </div>

            <p>O <code>transform</code> aceita várias propriedades diferentes, veja:</p>

            <hr>

            <h2>translate(px)</h2>
            <p>Irá mover o elemento.</p>
            <div class="code">
                <pre>transform: translate(200px);   </pre>
            </div>
            <button onclick="translat()">Ação</button>
            <button onclick="atualizar()">Atualizar Página</button>
            <div class="quadrado translate"></div>

            <hr>

            <h2>rotate(deg)</h2>
            <p>É usada para girar um elemento em torno de um ponto específico.</p>
            <div class="code">
                <pre>transform: rotate(45deg);   </pre>
            </div>
            <button onclick="rotate()">Ação</button>
            <button onclick="atualizar()">Atualizar Página</button>
            <div class="quadrado rotate"></div>

            <hr>

            <h2>scale(num)</h2>
            <p>É usada para aumentar ou diminuir o tamanho de um elemento.</p>
            <div class="code">
                <pre>transform: scale(2);   </pre>
            </div>
            <button onclick="scale()">Ação</button>
            <button onclick="atualizar()">Atualizar Página</button>
            <div class="quadrado scale"></div>

            <hr>

            <h2>skew(deg)</h2>
            <p>É usada para distorcer um elemento em relação aos seus eixos X e/ou Y.</p>
            <div class="code">
                <pre>transform: skew(30deg, 5deg);   </pre>
            </div>
            <button onclick="skew()">Ação</button>
            <button onclick="atualizar()">Atualizar Página</button>
            <div class="quadrado skew"></div>

            <hr>

            <h2>Combinação</h2>
            <p>Você pode combinar várias opções dentro do transform.</p>

            <button onclick="combinacao()">Ação</button>
            <button onclick="atualizar()">Atualizar Página</button>
            <div class="quadrado combinacao"></div>
        </main>
    </div>
</div>

<script type="text/javascript">
    function translat() {
        $('div.translate').css('transform', 'translate(200px)');
    }

    function rotate() {
        $('div.rotate').css('transform', 'rotate(45deg)');
    }

    function scale() {
        $('div.scale').css('transform', 'scale(2)');
    }

    function skew() {
        $('div.skew').css('transform', 'skew(30deg, 5deg)');
    }

    function combinacao() {
        $('div.combinacao').css('transform', 'translate(150px) rotate(40deg) scale(1.2)');
    }

    function atualizar() {
        location.reload();
    }
</script>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>