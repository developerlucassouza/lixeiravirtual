<?php
include_once '../header.php';
include_once 'verifica-login.php';
?>

<style type="text/css">
    div.teste h3 {
        border-radius: 5px;
        padding: 5px;
        text-align: center;
    }
    
    div.teste img {
        width: 100%;
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
            <i class="fa-solid fa-lock"></i> Área ADM
        </a>
        <?php
    }
    ?>


    <!-- Avaliações -->
    <h2 class="alert alert-primary mt-5">
        <i class="fa-solid fa-check"></i> Exercícios
    </h2>

    <p class="text-center">Faça exercícios avaliativos para testar suas habilidades em suas tecnologias favoritas.</p>

    <div class="testes">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="teste">
                    <h3 class="bg-html-escuro"><i class="fa-brands fa-html5"></i> HTML</h3>
                    <a href="testes/html.php">
                        <img src="imgs/teste2.png" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="teste">
                    <h3 class="bg-css-escuro"><i class="fa-brands fa-css3-alt"></i> CSS</h3>
                    <a href="testes/css.php">
                        <img src="imgs/teste2.png" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="teste">
                    <h3 class="bg-js-amarelo text-js-preto"><i class="fa-brands fa-square-js"></i> JavaScript</h3>
                    <a href="testes/javascript.php">
                        <img src="imgs/teste2.png" alt="">
                    </a>
                </div>
            </div>
        </div>



        <div class="row mt-5">
            <div class="col-md-4">
                <div class="teste">
                    <h3 class="bg-mysql-laranja"><i class="fa-solid fa-database"></i> MySQL</h3>
                    <a href="testes/mysql.php">
                        <img src="imgs/teste2.png" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="teste">
                    <h3 class="bg-php-azul text-php-preto"><i class="fa-brands fa-php"></i> PHP</h3>
                    <a href="testes/php.php">
                        <img src="imgs/teste2.png" alt="">
                    </a>
                </div>
            </div>

            <!-- <div class="col-md-4">
                <div class="teste">
                    <h3><i class="fa-brands fa-html5"></i> HTML</h3>
                    <a href="">
                        <img src="imgs/teste.png" alt="">
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</main>

<?php
include_once '../footer.php';
?>