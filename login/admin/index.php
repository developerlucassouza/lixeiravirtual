<?php
include_once 'restringe-comum.php';
include_once '../../header.php';
include_once '../../classes/Usuarios.class.php';

$mostra = new Usuarios();
$resultados = $mostra->mostraUsuarios();
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


<main class="container mt-3">

    <h2 class="alert alert-primary">
        Área de Administrador
    </h2>

    <a href="insere.php" class="btn btn-primary">
        <i class="fa-solid fa-plus"></i> Inserir Usuário
    </a>

    <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped table-hover bg-white text-dark">
            <tr>
                <th>ID</th>
                <th class="text-left">Nome</th>
                <th class="text-left">Email</th>
                <th>Nível</th>
                <th>Alterar</th>
                <th>Excluir</th>
                <th>Ativo</th>
            </tr>
            <?php
            foreach ($resultados as $usuario) {
                ?>
                <tr>
                    <td>
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
                    <td>
                        <a href="alterar.php?id_usuario=<?php echo $usuario['id_usuario']; ?>">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </td>

                    <!-- Excluir -->
                    <td>
                        <a href="javascript:
                        $('#btnExcluirModal').attr('href', 'excluir.php?id_usuario=<?php echo $usuario['id_usuario']; ?>');
                        $('#excluirModal').modal();
                        " id="<?php echo $usuario['id_usuario']; ?>" class="btnExcluir">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>

                    <!-- Ativo -->
                    <td>
                        <?php
                        if ($usuario['ativo'] == 1) {
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

</main>

<?php
include_once '../../footer.php';
?>