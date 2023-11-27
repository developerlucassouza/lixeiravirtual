<?php
include_once '../header.php';
include_once '../classes/Usuarios.class.php';

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $rsenha = $_POST['rsenha'];

    if (empty($nome) || empty($email) || empty($senha) || empty($rsenha)) {

        
        //echo '<script>alert("Preencha todos os campos");</script>';
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


    } else if ($senha != $rsenha) {


        //echo '<script>alert("As senhas são diferentes");</script>';

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

            <!-- Modal para Senhas diferentes -->
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
                            As senhas são diferentes!
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
        $insere = new Usuarios();
        $insere->insereUsuario($nome, $email, $senha, 1);
        //echo '<meta http-equiv="refresh" content="0;url=login.php">';
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