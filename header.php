<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <title>Lixeira Virtual</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Próprio -->
    <link rel="stylesheet" href="http://localhost/lixeiravirtual/style.css" type="text/css">
</head>
<body>

<header>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <!-- Link para Home -->
        <a class="navbar-brand" href="http://localhost/lixeiravirtual/">
            <i class="fa-solid fa-trash-can"></i> Lixeira Virtual
        </a>

        <!-- Botão Responsivo -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" id="txtSearch">
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="btnSearch">Search</button>
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

                    <a class="dropdown-item" href="#"><i class="fa-brands fa-html5"></i> HTML</a>
                    
                    <a class="dropdown-item" href="#"><i class="fa-brands fa-css3-alt"></i> CSS</a>

                    <!-- <a class="dropdown-item" href="#"><i class="fa-brands fa-js"></i> JavaScript</a> -->

                    <!-- <a class="dropdown-item" href="#"><i class="fa-brands fa-node-js"></i> Node.js</a> -->

                    <!-- <a class="dropdown-item" href="#"><i class="fa-brands fa-php"></i> PHP</a> -->

                    <a class="dropdown-item" href="#"><i class="fa-solid fa-database"></i> MySQL</a>

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
                    <a href="http://localhost/lixeiravirtual/techs/sistemas_operacionais/index.php" class="nav-link">Sistemas Operacionais</a>
                <li>

                
            </ul>

        </div>

    </nav>

    <!-- Navbar Techs -->
    <nav class="navbar navbar-expand-sm bg-preto celular">
        <!-- Menu Burguer Pages -->
        <img src="../../imgs/menuburguer.png" alt="" id="menuburguer">
    </nav>


    </header>

    <div id="espaco"></div>