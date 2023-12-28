<?php
$caminho = 'http://192.168.15.104:8080/lixeiravirtual/';
// $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// $pasta = 'lixeiravirtual/';
// $pos = strpos($url, $pasta);
// $num = $pos + strlen($pasta);
// $caminho = substr($url, 0, $num);

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['submitSearch'])){
    $pesquisa = $_POST['txtSearch'];
    $pesquisa = strtolower($pesquisa);
    $pesquisa = trim($pesquisa);

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
    <link rel="shortcut icon" href="<?php echo $caminho ?>imgs/lixeira-icon.png" type="image/x-icon">
    <title>Lixeira Virtual</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- DevIcon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
          

    <!-- CSS Próprio -->
    <link rel="stylesheet" href="<?php echo $caminho ?>style.css" type="text/css">

</head>
<body id="body">
<header>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">

        <!-- Link para Home -->
        <a class="navbar-brand" href="<?php echo $caminho ?>">
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

                    <a class="dropdown-item" href="<?php echo $caminho ?>techs/html/"><i class="fa-brands fa-html5"></i> HTML</a>
                    
                    <a class="dropdown-item" href="<?php echo $caminho ?>techs/css/"><i class="fa-brands fa-css3-alt"></i> CSS</a>

                    <a class="dropdown-item" href="<?php echo $caminho ?>techs/javascript/"><i class="fa-brands fa-js"></i> JavaScript</a>

                    <!-- <a class="dropdown-item" href="#"><i class="fa-brands fa-node-js"></i> Node.js</a> -->

                    <a class="dropdown-item" href="<?php echo $caminho ?>techs/php/"><i class="fa-brands fa-php"></i> PHP</a>

                    <a class="dropdown-item" href="<?php echo $caminho ?>techs/mysql/"><i class="devicon-mysql-plain"></i> MySQL</a>

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
                <!-- <li class="nav-item">
                    <a href="<?php //echo $caminho ?>techs/sistemas-operacionais/" class="nav-link">Sistemas Operacionais</a>
                <li> -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sistemas Operacionais
                    </a>

                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $caminho;?>/techs/sistemas-operacionais/win11.php">
                            <i class="devicon-windows8-original"></i> Windows 11
                        </a>

                        <a class="dropdown-item" href="<?php echo $caminho;?>/techs/sistemas-operacionais/win10.php">
                            <i class="devicon-windows8-original"></i> Windows 10
                        </a>

                        <a class="dropdown-item" href="<?php echo $caminho;?>/techs/sistemas-operacionais/win8.1.php">
                            <i class="devicon-windows8-original"></i> Windows 8.1
                        </a>

                        <a class="dropdown-item" href="<?php echo $caminho;?>/techs/sistemas-operacionais/win7.php">
                            <i class="devicon-windows8-original"></i> Windows 7
                        </a>

                        <a class="dropdown-item" href="<?php echo $caminho;?>/techs/sistemas-operacionais/winxp.php">
                            <i class="devicon-windows8-original"></i> Windows XP
                        </a>

                        <a class="dropdown-item" href="<?php echo $caminho;?>/techs/sistemas-operacionais/ubuntu.php">
                            <i class="devicon-linux-plain"></i> Ubuntu
                        </a>

                        <a class="dropdown-item" href="<?php echo $caminho;?>/techs/sistemas-operacionais/linuxmint.php">
                            <i class="devicon-linux-plain"></i> Linux Mint
                        </a>

                        <a class="dropdown-item" href="kalilinux.php">
                            <i class="devicon-linux-plain"></i> Kali Linux
                        </a>

                        <a class="dropdown-item" href="<?php echo $caminho;?>/techs/sistemas-operacionais/hirensboot.php">
                            <i class="fa-solid fa-compact-disc"></i> Hiren's BootCD
                        </a>
                    </div>
                </li>
            </ul>

        </div>

        <!-- Conteúdo Extra -->
        <?php
            if (!isset($_SESSION['nivel'])) {
                ?>
                    <a href="<?php echo $caminho ?>login/login.php" class="btn text-light float-right mr-3">
                        <i class="fa-solid fa-right-to-bracket text-info"></i> Login
                    </a>
                    <a href="<?php echo $caminho ?>login/cadastrar.php" class="btn text-light float-right mr-3">
                        <i class="fa-solid fa-right-to-bracket text-info"></i> Cadastrar-se
                    </a>
                <?php
            } else if ($_SESSION['nivel'] == 0) {
                ?>
                    <a href="<?php echo $caminho ?>login/admin/" class="btn text-primary float-right mr-3">
                        <i class="fa-solid fa-user"></i> <?php echo $_SESSION['nome']; ?>
                    </a>
                <?php
            } else {
                ?>
                    <a href="<?php echo $caminho ?>login/comum.php" class="btn text-primary float-right mr-3">
                        <i class="fa-solid fa-user"></i> <?php echo $_SESSION['nome']; ?>
                    </a>
                <?php
            }
        ?>
        




        <!-- Fazer Logoff -->
        <?php
            if (isset($_SESSION['nivel'])) {
                ?>

                    <a href="<?php echo $caminho ?>login/logoff.php"
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
        <img src="<?php echo $caminho ?>imgs/menuburguer.png" alt="" id="menuburguer">
    </nav>


    </header>

    <div id="espaco"></div>