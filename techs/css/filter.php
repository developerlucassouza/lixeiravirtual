<?php
include_once '../../header.php';
?>

<style>
    figure {
        display: inline-block;
        margin: 10px 30px;
    }

    figure>img {
        transition: ease 0.5s;
        width: 150px;
    }

    img:hover {
        -webkit-filter: none;
        -moz-filter: none;
        -o-filter: none;
        filter: none;
    }

    .blur {
        -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        filter: blur(5px);
    }

    .grayscale {
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
    }

    .brightness {
        -webkit-filter: brightness(200%);
        -moz-filter: brightness(200%);
        -o-filter: brightness(200%);
        filter: brightness(200%);
    }

    .contrast {
        -webkit-filter: contrast(50%);
        -moz-filter: contrast(50%);
        -o-filter: contrast(50%);
        filter: contrast(50%);
    }

    .drop-shadow {
        -webkit-filter: drop-shadow(8px 8px 10px #333333);
        -moz-filter: drop-shadow(8px 8px 10px #333333);
        -o-filter: drop-shadow(8px 8px 10px #333333);
        filter: drop-shadow(8px 8px 10px #333333);
    }

    .hue-rotate {
        -webkit-filter: hue-rotate(90deg);
        -moz-filter: hue-rotate(90deg);
        -o-filter: hue-rotate(90deg);
        filter: hue-rotate(90deg);
    }

    .invert {
        -webkit-filter: invert(100%);
        -moz-filter: invert(100%);
        -o-filter: invert(100%);
        filter: invert(100%);
    }

    .opacity {
        -webkit-filter: opacity(30%);
        -moz-filter: opacity(30%);
        -o-filter: opacity(30%);
        filter: opacity(30%);
    }

    .saturate {
        -webkit-filter: saturate(8);
        -moz-filter: saturate(8);
        -o-filter: saturate(8);
        filter: saturate(8);
    }

    .sepia {
        -webkit-filter: sepia(100%);
        -moz-filter: sepia(100%);
        -o-filter: sepia(100%);
        filter: sepia(100%);
    }
</style>

<div class="row">
    <div class="col-md-3">
        <div id="itens"></div>
    </div>

    <div class="col-md-9">
        <main id="tech">
            <h1>filter CSS</h1>
            <p>A propriedade <code>filter</code> é utilizada para aplicar efeitos visuais a elementos <code>HTML</code>,
                como imagens e outros conteúdos.</p>
            <p>Ela permite que você ajuste a aparência visual de um elemento usando uma variedade de funções de filtro,
                como desfoque, saturação, contraste e muito mais.</p>
            <p>Os filtros CSS são uma forma poderosa de adicionar efeitos visuais a elementos da web sem a necessidade
                de software de edição de imagem.</p>

            <div class="code">
                <pre>filter: <em>valor</em>;</pre>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="none">
                        <figcaption>none <br> padrão</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="blur">
                        <figcaption>blur(px) <br> Desfoque</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="grayscale">
                        <figcaption>grayscale(0-100%) <br> Tons de Cinza</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="brightness">
                        <figcaption>brightness(100% padrão) <br> Brilho</figcaption>
                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="contrast">
                        <figcaption>contrast(0-100%) <br> Contraste</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="drop-shadow">
                        <figcaption>drop-shadow(x, y, suavização, cor) <br> Sombra</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="hue-rotate">
                        <figcaption>hue-rotate(deg) <br> Rotacionar as Cores</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="invert">
                        <figcaption>invert(0-100%) <br> Inverter as Cores</figcaption>
                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="opacity">
                        <figcaption>opacity(0-100%) <br> Opacidade</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="saturate">
                        <figcaption>saturate(num) <br> Saturção</figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure>
                        <img src="imagens/riozinho.jpeg" alt="Rio" title="Rio" class="sepia">
                        <figcaption>sepia(0-100%) <br> Foto Envelhecida</figcaption>
                    </figure>
                </div>
            </div>

            <hr>

            <p>Por <code>filter</code> ser um recurso CSS3, ele pode ser incompatível com alguns navegadores.</p>
            <p>Para fazer outros navegadores aceitarem teremos de utilizar o <code>-webkit</code>.</p>

            <div class="code">
                <pre>
.elemento {
    -webkit-filter: opacity(30%);   
    -moz-filter: opacity(30%);
    -o-filter: opacity(30%);
    filter: opacity(30%);
}</pre>
            </div>
        </main>
    </div>
</div>

<?php
include_once '../../footer.php';
?>

<script src="../../scripts/css.js" type="text/javascript"></script>