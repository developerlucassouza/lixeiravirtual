<?php
include_once '../header.php';
include_once 'verifica-login.php';
?>

<style type="text/css">
    div.cursos img {
        transition: 1s;
        width: 100%;
    }

    div.cursos img:hover {
        box-shadow: 0px 0px 10px white;
        transform: scale(1.1);
    }

    div.cursos p {
        margin: 10px 0;
        text-align: center;
    }
</style>

<main class="container mt-3">
    <a href="comum.php" class="btn btn-secondary">
        <i class="fa-solid fa-arrow-left"></i> Voltar
    </a>

    <a href="altera-senha.php" class="btn btn-warning">
        <i class="fa-solid fa-lock"></i> Alterar Senha
    </a>

    <?php
    if ($_SESSION['nivel'] == 0) {
        ?>
        <a href="admin/" class="btn btn-info float-right">
            <i class="fa-solid fa-lock"></i> Área de Administrador
        </a>
        <?php
    }
    ?>



    <!-- Cursos Gratuitos -->
    <h2 class="alert alert-primary mt-5">
        <i class="fa-solid fa-book-bookmark"></i> Cursos Gratuitos
    </h2>

    <p class="text-center">Clique para visualizar cada curso gratuito.</p>

    <div class="cursos">
        <div class="row mt-3">
            <!-- Curso em Vídeo Algoritmos -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=8mei6uVttho&list=PLHz_AreHm4dmSj0MHol_aoNYCSGFqvfXV"
                    target="_blank">
                    <img src="imgs/curso-em-video-algoritmos.jpg" alt="">
                </a>
                <p>Curso em Vídeo - Lógica de Programação</p>
            </div>

            <!-- Curso em Vídeo Python -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=S9uPNppGsGo&list=PLHz_AreHm4dlKP6QQCekuIPky1CiwmdI6&pp=iAQB"
                    target="_blank">
                    <img src="imgs/curso-em-video-python.jpg" alt="">
                </a>
                <p>Curso em Vídeo - Python</p>
            </div>

            <!-- Curso em Vídeo HTML e CSS -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=Ejkb_YpuHWs&list=PLHz_AreHm4dkZ9-atkcmcBaMZdmLHft8n"
                    target="_blank">
                    <img src="imgs/curso-em-video-html-css.jpg" alt="">
                </a>
                <p>Curso em Vídeo - HTML e CSS</p>
            </div>
        </div>



        <div class="row mt-3">
            <!-- Curso em Vídeo JavaScript -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=1-w1RfGIov4&list=PLHz_AreHm4dlsK3Nr9GVvXCbpQyHQl1o1"
                    target="_blank">
                    <img src="imgs/curso-em-video-javascript.jpg" alt="">
                </a>
                <br>
                <p>Curso em Vídeo - JavaScript</p>
            </div>

            <!-- Curso em Vídeo MySQL -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=Ofktsne-utM&list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r"
                    target="_blank">
                    <img src="imgs/curso-em-video-mysql.jpg" alt="">
                </a>
                <p>Curso em Vídeo - MySQL</p>
            </div>

            <!-- Curso em Vídeo PHP -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=TfsO0BGvGn0&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_"
                    target="_blank">
                    <img src="imgs/curso-em-video-php.jpg" alt="">
                </a>
                <p>Curso em Vídeo - PHP Moderno</p>
            </div>
        </div>



        <div class="row mt-3">
            <!-- Matheus Battisti React.js -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=FXqX7oof0I4&list=PLnDvRpP8BneyVA0SZ2okm-QBojomniQVO&pp=iAQB"
                    target="_blank">
                    <img src="imgs/matheus-battisti-react.jpg" alt="">
                </a>
                <p>Matheus Battisti - React.js</p>
            </div>

            <!-- Matheus Battisti Angular -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=vJt_K1bFUeA&list=PLnDvRpP8Bnex2GQEN0768_AxZg_RaIGmw&pp=iAQB"
                    target="_blank">
                    <img src="imgs/matheus-battisti-angular.jpg" alt="">
                </a>
                <p>Matheus Battisti - Angular</p>
            </div>

            <!-- Matheus Battisti Vue.js -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=wsAQQioPIJs&list=PLnDvRpP8BnezDglaAvtWgQXzsOmXUuRHL&pp=iAQB"
                    target="_blank">
                    <img src="imgs/matheus-battisti-vue.jpg" alt="">
                </a>
                <p>Matheus Battisti - Vue.js</p>
            </div>
        </div>

        <div class="row mt-3">
            <!-- Matheus Battisti Laravel -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&pp=iAQB"
                    target="_blank">
                    <img src="imgs/matheus-battisti-laravel.jpg" alt="">
                </a>
                <p>Matheus Battisti - Laravel</p>
            </div>

            <!-- Matheus Battisti Next.js -->
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=XHrbg2iYNCg&list=PLnDvRpP8BnezfJcfiClWskFOLODeqI_Ft&pp=iAQB"
                    target="_blank">
                    <img src="imgs/matheus-battisti-next.jpg" alt="">
                </a>
                <p>Matheus Battisti - Next.js</p>
            </div>
        </div>
    </div>
</main>

<?php
include_once '../footer.php';
?>