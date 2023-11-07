<?php
include_once '../header.php';
?>

<main class="container">
    <h2 class="alert alert-primary">
        <i class="fa-solid fa-note-sticky"></i> Manuais de Tecnologias
    </h2>

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

    <p class="text-center">Clique para visualizar cada manual.</p>

    <a href="manuais/hardware.pdf" class="alert alert-light d-block">
        <i class="fa-solid fa-microchip"></i> Hardware <i class="fa-solid fa-note-sticky float-right"></i>
    </a>

    <a href="manuais/HTML e CSS.pdf" class="alert alert-light d-block">
        <i class="fa-brands fa-html5"></i> HTML e CSS <i class="fa-solid fa-note-sticky float-right"></i>
    </a>

</main>

<?php
include_once '../footer.php';
?>