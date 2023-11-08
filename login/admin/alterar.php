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
        echo '
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script> 
        $(document).ready(function() {
            $("#preencha").modal();
        });
        </script>';
    } else {
        $altera = new Usuarios();
        $altera->alteraUsuario($_GET['id_usuario'], $nome, $email, $nivel);
        echo '
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script> 
        $(document).ready(function() {
            $("#alterado").modal();
        });
        </script>';
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



<!-- Modal para quando alterar usuario -->
<div class="modal fade" id="alterado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalLabel">Sucesso!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark">
                Usuário alterado com sucesso!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal para preencher os campos -->
<div class="modal fade" id="preencha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Aviso!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        Preencha todos os campos!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
      </div>
    </div>
  </div>
</div>










<main class="container mt-3">
    <h2 class="alert alert-primary">
        <i class="fa-solid fa-pen"></i> Alterar Usuário
    </h2>

    <form method="POST" class="p-3 bg-light text-dark">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" autofocus value="<?php echo $usuario['nome']; ?>">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?php echo $usuario['email']; ?>">

        <label for="nivel">Nível</label>
        <select name="nivel" id="nivel" class="form-control">
            <option value="1" <?php if ($usuario['nivel'] == 1) {
                echo 'selected';
            } ?>>Comum</option>
            <option value="0" <?php if ($usuario['nivel'] == 0) {
                echo 'selected';
            } ?>>Administrador</option>
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