<?php
include_once '../header.php';
include_once 'verifica-login.php';
?>



<main class="container mt-3">
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

    <h2>Olá, <?php echo $_SESSION['nome']; ?></h2>

    <p>Bem-vindo de volta! Estamos animados por você ter feito login em nossa plataforma. Agora que está conectado, as possibilidades são infinitas. Explore uma variedade de cursos incríveis, compartilhe suas sugestões para aprimorar ainda mais a sua experiência no site e mergulhe em desafios de exercícios que vão impulsionar o seu aprendizado. Sua jornada aqui está repleta de oportunidades emocionantes. Vamos começar a explorar juntos!</p>

    <a href="cursos.php" class="alert alert-primary d-block mt-3">
        <i class="fa-solid fa-book-bookmark"></i> Cursos
    </a>

    <a href="exercicios.php" class="alert alert-primary d-block mt-3">
        <i class="fa-solid fa-check"></i> Exercícios
    </a>

    <a href="sugestoes.php" class="alert alert-primary d-block mt-3">
        <i class="fa-solid fa-question"></i> Dar Sugestões
    </a>
    
    <img src="../imgs/lixeira2.png" class="d-block mx-auto" alt="">


    




    

</main>

<?php
include_once '../footer.php';
?>