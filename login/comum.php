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
            <i class="fa-solid fa-lock"></i> Área de Administrador
        </a>
        <?php
    }
    ?>

    <h2>Olá, <?php echo $_SESSION['nome']; ?></h2>

    <a href="manuais.php" class="alert alert-primary d-block mt-3">
        <i class="fa-solid fa-note-sticky"></i> Manuais de Tecnologia
    </a>

    <a href="exercicios.php" class="alert alert-primary d-block mt-3">
        <i class="fa-solid fa-check"></i> Exercícios
    </a>

    <a href="cursos.php" class="alert alert-primary d-block mt-3">
        <i class="fa-solid fa-book-bookmark"></i> Cursos
    </a>

    



    




    

</main>

<?php
include_once '../footer.php';
?>