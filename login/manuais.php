<?php
include_once '../header.php';
include_once 'verifica-login.php';
?>

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

    <h2 class="alert alert-primary">
        <i class="fa-solid fa-note-sticky"></i> Manuais de Tecnologias
    </h2>
    
    <p class="text-center">Clique para visualizar cada manual.</p>
    <p class="text-center">Escritos por: Murilo Costa Santos</p>
    
    <a href="manuais/hardware.pdf" target="_blank" class="alert alert-light d-block">
        <i class="fa-solid fa-microchip"></i> Hardware <i class="fa-solid fa-note-sticky float-right"></i>
    </a>
    
    <a href="manuais/HTML e CSS.pdf" target="_blank" class="alert alert-light d-block">
        <i class="fa-brands fa-html5"></i> HTML e CSS <i class="fa-solid fa-note-sticky float-right"></i>
    </a>

    <a href="manuais/JavaScript.pdf" target="_blank" class="alert alert-light d-block">
        <i class="fa-brands fa-square-js"></i> JavaScript <i class="fa-solid fa-note-sticky float-right"></i>
    </a>

    <a href="manuais/PHP.pdf" target="_blank" class="alert alert-light d-block">
        <i class="fa-brands fa-php"></i> PHP <i class="fa-solid fa-note-sticky float-right"></i>
    </a>

    <a href="manuais/MySQL.pdf" target="_blank" class="alert alert-light d-block">
        <i class="devicon-mysql-plain"></i> MySQL <i class="fa-solid fa-note-sticky float-right"></i>
    </a>

    <a href="manuais/csharp.pdf" target="_blank" class="alert alert-light d-block">
        <i class="devicon-csharp-plain"></i> C# <i class="fa-solid fa-note-sticky float-right"></i>
    </a>
</main>

<?php
include_once '../footer.php';
?>