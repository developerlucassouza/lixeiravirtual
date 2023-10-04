<?php
    include_once 'header.php';
?>

<style>
    main {
        display: block;
        margin: auto;
    }

    .introducao {
        background-attachment: fixed;
        background-image: url(imgs/fundo-programacao.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        display: block;
        height: 100vh;
        margin: auto;
        padding: 100px 10px;
    }

    .introducao h1 {
        margin: 0;
        padding: 0;
    }

    .introducao .texto {
        background-color: #274360;
        border-radius: 10px;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        font-size: 1.2em;
        margin: auto;
        padding: 10px 20px;
        text-align: center;
        width: 80%;
        max-width: 500px;
    }

    .introducao .lixeira {
        font-size: 3em;
    }
</style>

<div class="introducao">
    <h1>Lixeira Virtual</h1>

    <div class="texto">
        <p>Aqui, você encontrará uma plataforma abrangente e acessível para dominar uma variedade de tecnologias
            essenciais para o mundo da programação.</p>

        <p>Desde as bases do <a href="techs/html/">HTML</a> e <a href="techs/css/">CSS</a> até
            linguagens de programação poderosas como JavaScript, C#, Java e muito mais, estamos empenhados em
            capacitá-lo com o conhecimento necessário para se destacar no desenvolvimento de software.</p>

        <i class="fa-regular fa-trash-can lixeira"></i>
    </div>
</div>

<main class="container">

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="tech">
                    <h2>HTML5</h2>
                    <img src="imgs/logo_html.png" alt="logo_html">
                    <a href="techs/html/">Aprenda HTML</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tech">
                    <h2>CSS3</h2>
                    <img src="imgs/logo_css.png" alt="logo_css">
                    <a href="techs/css/">Aprenda CSS</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tech">
                    <h2>JavaScript</h2>
                    <img src="imgs/logo_javascript.png" alt="logo_js">
                    <a href="techs/javascript/">Aprenda JavaScript</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                <div class="tech">
                    <h2>MySQL</h2>
                    <img src="imgs/logo_mysql.png" alt="logo_mysql">
                    <a href="techs/mysql/">Aprenda MySQL</a>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>

</main>

<?php
include_once 'footer.php';
?>