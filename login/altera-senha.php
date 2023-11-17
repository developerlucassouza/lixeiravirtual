<?php
include_once '../header.php';
include_once '../classes/Usuarios.class.php';
include_once 'verifica-login.php';

if (isset($_POST['submit'])) {
    $senha = $_POST['senha'];
    $nsenha = $_POST['nsenha'];
    $rnsenha = $_POST['rnsenha'];

    // Verifica se os campos foram preenchidos
    if (empty($senha) or empty($nsenha) or empty($rnsenha)) {
        echo '<script>alert("Preencha todos os campos");</script>';
    } else {
        // Verifica se a nova senha bate
        if ($nsenha != $rnsenha) {
            echo '<script>alert("As novas senhas não coincidem! Tente novamente!");</script>';
        } else {
            $alteraSenha = new Usuarios();
            $alteraSenha -> alteraSenha($_SESSION['id_usuario'], $senha, $nsenha);
        }
    }





}
?>

<style type="text/css">
    form {
        border-radius: 10px;
    }

    option {
        font-size: 1.2em;
    }
</style>

<main class="container mt-3">
    <h2 class="alert alert-primary">
        <i class="fa-solid fa-pen"></i> Alterar Senha
    </h2>

    <p>Olá, <?php echo $_SESSION['nome']; ?>. Deseja realmente alterar sua senha?</p>

    <form method="POST" class="p-3 bg-light text-dark">
        <label for="senha">Senha Atual</label>
        <input type="password" name="senha" id="senha" class="form-control" autofocus>

        <label for="nsenha">Nova Senha</label>
        <input type="password" name="nsenha" id="nsenha" class="form-control">

        <label for="rnsenha">Repita a Nova Senha</label>
        <input type="password" name="rnsenha" id="rnsenha" class="form-control">

        <button type="submit" name="submit" class="btn btn-primary mt-3"> 
            <i class="fa-solid fa-pen"></i> Alterar
        </button>

        <a href="javascript: history.go(-1);" class="btn btn-secondary mt-3">
            <i class="fa-solid fa-arrow-left"></i> Voltar
        </a>
    </form>
</main>

<?php
include_once '../footer.php';
?>