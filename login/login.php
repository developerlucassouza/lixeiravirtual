<?php
include_once '../header.php';
include_once '../classes/Usuarios.class.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>';
        ?>

        <!-- Modal para preeencher os campos -->
        <div class="modal fade" id="preencha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-dark">
                        Preencha todos os campos!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                    </div>
                </div>
            </div>
        </div>

        <?php
        echo '<script> $("#preencha").modal(); </script>';
        
    } else {
        $login = new Usuarios();
        $login->login($email, $senha);
    }
}
?>

<style type="text/css">
    body,
    html {
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