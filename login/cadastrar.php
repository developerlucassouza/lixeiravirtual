<?php
include_once '../header.php';
include_once '../classes/Usuarios.class.php';

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $rsenha = $_POST['rsenha'];

    if (empty($nome) || empty($email) || empty($senha) || empty($rsenha)) {
        echo '<script>alert("Preencha todos os campos");</script>';
    } else if ($senha != $rsenha){
        echo '<script>alert("As senhas são diferentes");</script>';
    } else {
        $insere = new Usuarios();
        $insere->insereUsuario($nome,$email,$senha, 1);
    }

}
?>

<style type="text/css">
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
                <i class="fa-solid fa-lock"></i> Cadastrar-se
        </h3>
        <form method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" autofocus>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">

            <label for="rsenha">Repita sua Senha</label>
            <input type="password" name="rsenha" id="rsenha" class="form-control">

            <a href="javascript: history.go(-1)" class="btn btn-secondary mt-3">
                <i class="fa-solid fa-arrow-left"></i> Voltar
            </a>

            <button type="submit" name="submit" class="btn btn-success mt-3 float-right">
                <i class="fa-solid fa-lock-open"></i> Cadastrar-se
            </button>
        </form>

        <a href="login.php" class="link mt-4">Já tenho cadastro</a>
    </div>
</main>

<?php
include_once '../footer.php';
?>