<?php
include_once 'restringe-comum.php';
include_once '../../header.php';
include_once '../../classes/Usuarios.class.php';

// Inserir Usuário
if (isset($_POST['submitInsere'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];

    if (empty($_POST['nome']) or empty($_POST['email'])) {
        echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>';

        echo '<script>$(document).ready(function() { $("#preencha").modal(); });</script>';

    } else {
        $insere = new Usuarios();
        $insere->insereUsuario($nome, $email, '123', $nivel);
    }
}



$mostra = new Usuarios();
$resultados = $mostra->mostraUsuarios();

if (isset($_GET['orderby'])) {

    if ($_GET['orderby'] == 'nome') {
        $resultados = $mostra->mostraUsuariosPorNome();
    }

    if ($_GET['orderby'] == 'email') {
        $resultados = $mostra->mostraUsuariosPorEmail();
    }

    if ($_GET['orderby'] == 'nivel') {
        $resultados = $mostra->mostraUsuariosPorNivel();
    }

}
?>







<!-- Modal perguntando sobre excluir usuario -->
<div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="TituloModalCentralizado">Aviso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark">
                Deseja excluir permanentemente este usuário?<br>
                Usuários excluídos não poderão ser recuperados.
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-danger" id="btnExcluirModal"><i class="fa-solid fa-trash"></i> Excluir</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para inserir usuário -->
<div class="modal fade" id="insereModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title" id="TituloModalCentralizado"><i class="fa-solid fa-plus"></i> Inserir Usuário
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="p-0 text-dark">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" autofocus>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">

                    <label for="nivel">Nível</label>
                    <select name="nivel" id="nivel" class="form-control">
                        <option value="1">Comum</option>
                        <option value="0">Administrador</option>
                    </select>

                    <p class="mt-3 text-center">A senha padrão será "123"</p>

                    <button type="submit" name="submitInsere" class="btn btn-primary mt-3">
                        <i class="fa-solid fa-plus"></i> Inserir
                    </button>

                    <!-- <a href="./" class="btn btn-secondary mt-3">
                        <i class="fa-solid fa-arrow-left"></i> Voltar
                    </a> -->

                    <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">
                        <i class="fa-solid fa-arrow-left"></i> Voltar
                    </button>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar mudanças</button>
            </div> -->
        </div>
    </div>
</div>

<!-- Modal para preencher os campos -->
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
                <p>Preencha todos os Campos!!!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
            </div>
        </div>
    </div>
</div>






<main class="container mt-3">

    <a href="../altera-senha.php" class="btn btn-warning">
        <i class="fa-solid fa-lock"></i> Alterar Senha
    </a>

    <a href="../comum.php" class="btn btn-info float-right">
        <i class="fa-solid fa-user"></i> Área Comum
    </a>



    <h2 class="alert alert-primary mt-3">
        <i class="fa-solid fa-lock"></i> Área de Administrador
    </h2>






    <a href="javascript: $('#insereModal').modal();" class="btn btn-primary mt-3">
        <i class="fa-solid fa-plus"></i> Inserir Usuário
    </a>

    <a href="visualizar-sugestoes.php" class="btn btn-success mt-3">
        <i class="fa-solid fa-question"></i> Sugestões
    </a>

    <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped table-hover bg-white text-dark">
            <tr>
                <!-- ID -->
                <th class="text-center">
                    ID
                    <a href="./" class="float-right">
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>
                </th>

                <!-- Nome -->
                <th class="text-left">
                    Nome
                    <a href="index.php?orderby=nome" class="float-right">
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>
                </th>

                <!-- Email -->
                <th class="text-left">
                    Email
                    <a href="index.php?orderby=email" class="float-right">
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>
                </th>

                <!-- Nivel -->
                <th>
                    Nível
                    <a href="index.php?orderby=nivel" class="float-right">
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>
                </th>
                <th class="text-center">Alterar</th>
                <th class="text-center">Excluir</th>
                <th class="text-center">Ativo</th>
            </tr>
            <?php
            foreach ($resultados as $usuario) {
                ?>
                <tr>
                    <td class="text-center">
                        <?php echo $usuario['id_usuario']; ?>
                    </td>
                    <td class="text-left">
                        <?php echo $usuario['nome']; ?>
                    </td>
                    <td class="text-left">
                        <?php echo $usuario['email']; ?>
                    </td>

                    <!-- Nível -->
                    <td>
                        <?php
                        if ($usuario['nivel'] == 0) {
                            echo 'Administrador';
                        } else {
                            echo 'Comum';
                        }
                        ?>
                    </td>

                    <!-- Alterar -->
                    <td class="text-center">
                        <a href="alterar.php?id_usuario=<?php echo $usuario['id_usuario']; ?>">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </td>

                    <!-- Excluir -->
                    <td class="text-center">
                        <?php
                        if ($_SESSION['id_usuario'] == $usuario['id_usuario']) {
                            ?>
                            <i class="fa-solid fa-hand text-warning"></i>
                            <?php
                        } else {
                            ?>
                            <a href="javascript:
                                    $('#btnExcluirModal').attr('href', 'excluir.php?id_usuario=<?php echo $usuario['id_usuario']; ?>');
                                    $('#excluirModal').modal();
                                    " id="<?php echo $usuario['id_usuario']; ?>" class="btnExcluir">
                                <i class="fa-solid fa-trash text-dark"></i>
                            </a>
                            <?php
                        }
                        ?>
                    </td>

                    <!-- Ativo -->
                    <td class="text-center">

                        <?php
                        if ($_SESSION['id_usuario'] == $usuario['id_usuario']) {
                            ?>
                            <i class="fa-solid fa-hand text-warning"></i>
                            <?php
                        } else if ($usuario['ativo'] == 1) {
                            ?>
                                <a href="desativa.php?id_usuario=<?php echo $usuario['id_usuario']; ?>">
                                    <i class="fa-solid fa-check text-success"></i>
                                </a>
                            <?php
                        } else if ($usuario['ativo'] == 0) {
                            ?>
                                    <a href="ativa.php?id_usuario=<?php echo $usuario['id_usuario']; ?>">
                                        <i class="fa-solid fa-xmark text-danger"></i>
                                    </a>
                            <?php
                        } else {
                            echo 'Erro! Verifique o Banco de Dados!';
                        }
                        ?>
                    </td>




                </tr>
                <?php
            }
            ?>
        </table>
    </div>

    <img src="../../imgs/lixeira2.png" class="d-block mx-auto" alt="">

</main>

<?php
include_once '../../footer.php';
?>