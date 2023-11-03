<?php
include_once 'restringe-comum.php';
include_once '../../header.php';
include_once '../../classes/Usuarios.class.php';

if (isset($_GET['id_usuario'])) {
    $mostra = new Usuarios();
    $usuario = $mostra->mostraUsuario($_GET['id_usuario']);
} else {
    echo '<meta http-equiv="refresh" content="0;url=./">';
}

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];

    if (empty($nome) or empty($email)) {
        echo '<script>alert("Preencha todos os campos");</script>';
    } else {
        $altera = new Usuarios();
        $altera->alteraUsuario($_GET['id_usuario'], $nome, $email, $nivel);
        echo '<script>alert("Usuário alterado com sucesso!");</script>';
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
        <i class="fa-solid fa-pen"></i> Alterar Usuário
    </h2>

    <form method="POST" class="p-3 bg-light text-dark">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" autofocus
        value="<?php echo $usuario['nome']; ?>">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control"
        value="<?php echo $usuario['email']; ?>">

        <label for="nivel">Nível</label>
        <select name="nivel" id="nivel" class="form-control">
            <option value="1" <?php if ($usuario['nivel'] == 1) {echo 'selected';}?>>Comum</option>
            <option value="0" <?php if ($usuario['nivel'] == 0) {echo 'selected';}?>>Administrador</option>
        </select>

        <button type="submit" name="submit" class="btn btn-primary mt-3"> 
            <i class="fa-solid fa-pen"></i> Alterar
        </button>

        <a href="redefinir-senha.php?id_usuario=<?php echo $_GET['id_usuario']; ?>" class="btn btn-success mt-3">
            <i class="fa-solid fa-lock"></i> Redefinir Senha
        </a>

        <a href="./" class="btn btn-secondary mt-3">
            <i class="fa-solid fa-arrow-left"></i> Voltar
        </a>
    </form>
</main>

<?php
include_once '../../footer.php';
?>