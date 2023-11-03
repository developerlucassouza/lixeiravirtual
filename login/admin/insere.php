<?php
include_once 'restringe-comum.php';
include_once '../../header.php';
include_once '../../classes/Usuarios.class.php';

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];

    if (empty($nome) or empty($email)) {
        echo '<script>alert("Preencha todos os campos");</script>';
    } else {
        $insere = new Usuarios();
        $insere->insereUsuario($nome, $email, '123', $nivel);
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
        <i class="fa-solid fa-plus"></i> Inserir Usuário
    </h2>

    <form method="POST" class="p-3 bg-light text-dark">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" autofocus>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">

        <label for="nivel">Nível</label>
        <select name="nivel" id="nivel" class="form-control">
            <option value="1">Comum</option>
            <option value="0">Administrador</option>
        </select>

        <p class="mt-3">A senha padrão será "123"</p>

        <button type="submit" name="submit" class="btn btn-primary mt-3"> 
            <i class="fa-solid fa-plus"></i> Inserir
        </button>

        <a href="./" class="btn btn-secondary mt-3">
            <i class="fa-solid fa-arrow-left"></i> Voltar
        </a>
    </form>
</main>

<?php
include_once '../../footer.php';
?>