<?php
include_once '../header.php';
include_once 'verifica-login.php';
include_once '../classes/Sugestoes.class.php';

if (isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    $sugestao = $_POST['sugestao'];

    if (empty($titulo) or empty($sugestao)) {
        echo '
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        ';
        echo '<script> $(document).ready(function() { $("#preencha").modal(); }); </script>';

    } else {

        $insere = new Sugestoes();
        $insere -> insereSugestao($_SESSION['id_usuario'], $titulo, $sugestao);

        echo '
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        ';
        echo '<script> $(document).ready(function() { $("#enviado").modal(); }); </script>';

    }
}
?>




<!-- Modal preencha todos os campos -->
<div class="modal fade" id="preencha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="exampleModalLabel">Aviso!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Preencha todos os campos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sugestao inserida -->
<div class="modal fade" id="enviado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalLabel">Sucesso!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Sugestão enviada com sucesso.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>






<main class="container mt-3">
    <a href="comum.php" class="btn btn-secondary">
        <i class="fa-solid fa-arrow-left"></i> Voltar
    </a>

    <a href="altera-senha.php" class="btn btn-warning">
        <i class="fa-solid fa-lock"></i> Alterar Senha
    </a>

    <?php
    if ($_SESSION['nivel'] == 0) {
        ?>
        <a href="admin/" class="btn btn-info float-right">
            <i class="fa-solid fa-lock"></i> Área ADM
        </a>
        <?php
    }
    ?>

    <!-- Dar Sugestão -->
    <h2 class="alert alert-primary mt-5">
        <i class="fa-solid fa-question"></i> Dar Sugestão
    </h2>

    <form method="POST">
        <label for="titulo">Título da Sugestão</label>
        <input type="text" name="titulo" id="titulo" class="form-control" autofocus>

        <label for="sugestao">Sugestão</label>
        <textarea name="sugestao" id="sugestao" cols="30" rows="10" class="form-control"></textarea>

        <input type="submit" name="submit" value="Enviar Sugestão" class="btn btn-primary mt-3">
    </form>
</main>

<?php
include_once '../footer.php';
?>