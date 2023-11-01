<?php
include_once '../header.php';
include_once '../classes/Usuarios.class.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        echo '<script>alert("Preencha todos os campos!");</script>';
    } else {
        $login = new Usuarios();
        $login->login($email, $senha);
    }
}
?>

<style type="text/css">
    body, html {
        overflow-x: hidden !important;
    }

    label {
        color: black;
    }

    .link {
        display: block;
    }

    main {
        display: flex;
        height: 90vh;
        align-items: center;
        justify-content: center;
    }

    div.container {
        border-radius: 10px;
        
        width: 90% !important;
        max-width: 500px !important;
    }
</style>

<main>

    <div class="container bg-light p-3">

        <h3 class="alert alert-primary text-center">
            <i class="fa-solid fa-lock"></i> Login
        </h3>

        <form method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">

            <a href="javascript: history.go(-1)" class="btn btn-secondary mt-3">
                <i class="fa-solid fa-arrow-left"></i> Voltar
            </a>

            <button type="submit" name="submit" class="btn btn-success mt-3 float-right">
                <i class="fa-solid fa-lock-open"></i> Logar
            </button>

            
        </form>

        <a href="cadastrar.php" class="link mt-3">Cadastrar-se</a>
        <!-- <a href="" class="link mt-3">Esqueci a Senha</a> -->

    </div>
</main>

<?php
include_once '../footer.php';
?>