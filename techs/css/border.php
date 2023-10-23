<?php
    include_once '../../header.php';
?>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
        <h1>border CSS</h1>
        <p><code>border</code> é uma shorthand para a criação de bordas nos elementos <code><a href="../html/index.php">HTML</a></code>.</p>

        <div class="code">
            <pre>border: <em>largura tipo cor</em>;</pre>
        </div>

        <p>A borda padrão é criada da seguinte forma:</p>

        <div class="code">
            <pre>border: 1px solid black;</pre>
        </div>
        <div style="border: 1px solid black; margin: 20px;"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et velit dolores magnam, odit vel minus! Deserunt, sequi delectus. Nulla, maiores. Sit, quaerat natus corporis eveniet beatae quasi amet minima enim. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ab accusantium saepe. Eum deserunt amet eos a fuga quae est blanditiis quis officiis ducimus facilis, voluptatem officia ipsa? Explicabo, odit.</p></div>

        <hr>

        <p>A shorthand <code>border</code> configura três estilos, que podem ser definidos separdamente:</p>
        <p><code><a href="borderwidth.php">border-width</a></code>: define o tamanho da borda.</p>
        <p><code><a href="borderstyle.php">border-style</a></code>: define o tipo da borda.</p>
        <p><code><a href="bordercolor.php">border-color</a></code>: define a cor da borda.</p>
        </main>
    </div>
</div>

<?php
    include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>