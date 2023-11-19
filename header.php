<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['submitSearch'])){
    $pesquisa = $_POST['txtSearch'];
    $pesquisa = strtolower($pesquisa);
    $pesquisa = trim($pesquisa);

    $caminho = 'http://localhost/lixeiravirtual/';

    switch ($pesquisa) {
        case 'html':
            //echo '<meta http-equiv="refresh" content="3;url=index.php">';
            header('Location: ' . $caminho . 'techs/html/');
            break;

        case 'css':
            //echo '<meta http-equiv="refresh" content="3;url=index.php">';
            header('Location: ' . $caminho . 'techs/css/');
            break;

        case 'js':
        case 'javascript':
            //echo '<meta http-equiv="refresh" content="3;url=index.php">';
            header('Location: ' . $caminho . 'techs/javascript/');
            break;

        case 'mysql':
            //echo '<meta http-equiv="refresh" content="3;url=index.php">';
            header('Location: ' . $caminho . 'techs/mysql/');
            break;

        case 'php':
            header('Location: ' . $caminho . 'techs/php/');
            break;

        default:
            header('Location: ' . $caminho . 'erro/erro-pesquisa.php');
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <link rel="shortcut icon" href="http://localhost/lixeiravirtual/imgs/lixeira-icon.png" type="image/x-icon">
    <title>Lixeira Virtual</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Próprio -->
    <link rel="stylesheet" href="http://localhost/lixeiravirtual/style.css" type="text/css">

</head>
<body id="body">
<header>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">

        <!-- Link para Home -->
        <a class="navbar-brand" href="http://localhost/lixeiravirtual/">
            <i class="fa-solid fa-trash-can"></i> Lixeira Virtual
        </a>

        <!-- Botão Responsivo -->
        <button class="navbar-toggler" id="btnResponsivo"
        type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search -->
            <form method="POST" class="form-inline my-2 my-lg-0" autocomplete="off">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name="txtSearch" id="txtSearch">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitSearch" id="btnSearch"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <!-- Itens da Navbar -->
            <ul class="navbar-nav mr-auto" id="navbaritens">
                <!-- Cursos -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cursos
                    </a>

                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" id="navbartechs">
                        
                    <!-- <a class="dropdown-item" href="#">   </a> -->
                    <!-- <a class="dropdown-item" href="#">Python</a> -->

                    <a class="dropdown-item" href="http://localhost/lixeiravirtual/techs/html/"><i class="fa-brands fa-html5"></i> HTML</a>
                    
                    <a class="dropdown-item" href="http://localhost/lixeiravirtual/techs/css/"><i class="fa-brands fa-css3-alt"></i> CSS</a>

                    <a class="dropdown-item" href="http://localhost/lixeiravirtual/techs/javascript/"><i class="fa-brands fa-js"></i> JavaScript</a>

                    <!-- <a class="dropdown-item" href="#"><i class="fa-brands fa-node-js"></i> Node.js</a> -->

                    <a class="dropdown-item" href="http://localhost/lixeiravirtual/techs/php/"><i class="fa-brands fa-php"></i> PHP</a>

                    <a class="dropdown-item" href="http://localhost/lixeiravirtual/techs/mysql/"><i class="fa-solid fa-database"></i> MySQL</a>

                    <!-- <a class="dropdown-item" href="#">SQL Server</a> -->

                    <!-- <a class="dropdown-item" href="#">Mongo DB</a> -->

                    <!-- <a class="dropdown-item" href="#">C</a> -->

                    <!-- <a class="dropdown-item" href="#">C++</a> -->

                    <!-- <a class="dropdown-item" href="#">C#</a> -->

                    <!-- <a class="dropdown-item" href="#">Java</a> -->

                    <!-- <a class="dropdown-item" href="#">Bootstrap</a> -->

                    <!-- <a class="dropdown-item" href="#">jQuery</a> -->

                    <!-- <a class="dropdown-item" href="#">React.js</a> -->

                    <!-- <a class="dropdown-item" href="#">Angular.js</a> -->

                    <!-- <a class="dropdown-item" href="#">Vue.js</a> -->

                    <!-- <a class="dropdown-item" href="#">Visual Basic</a> -->

                    <!-- <a class="dropdown-item" href="#">Typescript</a> -->

                    <!-- <a class="dropdown-item" href="#">Assembly</a> -->

                    <!-- <a class="dropdown-item" href="#">Ruby</a> -->

                    <!-- <a class="dropdown-item" href="#">R</a> -->

                    <!-- <a class="dropdown-item" href="#">Kotlin</a> -->

                    <!-- <a class="dropdown-item" href="#">Word</a> -->

                    <!-- <a class="dropdown-item" href="#">Excel</a> -->

                    <!-- <a class="dropdown-item" href="#">PowerPoint</a> -->

                    <!-- <a class="dropdown-item" href="#">Linux</a> -->

                    </div>
                </li>

                <!-- Sistemas Operacionais -->
                <li class="nav-item">
                    <a href="http://localhost/lixeiravirtual/techs/sistemas-operacionais/" class="nav-link">Sistemas Operacionais</a>
                <li>

                
            </ul>

        </div>

        <!-- Conteúdo Extra -->
        <a href="<?php
                if (!isset($_SESSION["nivel"])) {
                    echo 'http://localhost/lixeiravirtual/login/login.php';
                } else if ($_SESSION['nivel'] == 0) {
                    echo 'http://localhost/lixeiravirtual/login/admin/';
                } else {
                    echo 'http://localhost/lixeiravirtual/login/comum.php';
                }
            ?>" 
        class="btn text-warning float-right mr-3" >
            <i class="fa-solid fa-star"></i> Conteúdo Adicional
        </a>

        <!-- Fazer Logoff -->
        <?php
            if (isset($_SESSION['nivel'])) {
                ?>

                    <a href="http://localhost/lixeiravirtual/login/logoff.php"
                    class="btn text-danger float-right mr-3" id="logoff">
                        <i class="fa-solid fa-power-off"></i> Logoff
                    </a>

                <?php
            }
        ?>

    </nav>

    <!-- Navbar Techs -->
    <nav class="navbar navbar-expand-sm bg-preto celular" id="navmenuburguer">
        <!-- Menu Burguer Pages -->
        <img src="../../imgs/menuburguer.png" alt="" id="menuburguer">
    </nav>


    </header>

    <div id="espaco"></div>