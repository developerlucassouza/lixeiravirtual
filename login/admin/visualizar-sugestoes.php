<?php
include_once 'restringe-comum.php';
include_once '../../header.php';
include_once '../../classes/Usuarios.class.php';
include_once '../../classes/Sugestoes.class.php';

$mostra = new Sugestoes();
$sugestoes = $mostra->mostraSugestoes();

if (isset($_POST['submit'])) {
    $excloi = new Sugestoes();
    $excloi -> excluiSugestao($_POST['id_sugestao']);
    echo '<script>open("visualizar-sugestoes.php", "_self");</script>';
}
?>






<!-- Modal quer excluir -->
<div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="TituloModalCentralizado">Aviso!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja apagar essa sugestão?</p>
                <p>Não será possível recuperar a sugestão.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <form method="POST">
                    <input type="hidden" name="id_sugestao" id="id_sugestao" value="">
                    <button type="submit" name="submit" class="btn btn-primary">Salvar mudanças</button>
                </form>
            </div>
        </div>
    </div>
</div>












<style type="text/css">
    div.sugTop,
    div.sugBot {
        padding: 10px;
    }

    div.sugTop {
        background-color: #333333;
    }

    div.sugBot {
        background-color: #CCCCCC;
    }
</style>



<main class="container mt-3 pb-5">
    <a href="./" class="btn btn-secondary mt-3">
        <i class="fa-solid fa-arrow-left"></i> Voltar
    </a>

    <h2 class="alert alert-primary mt-3">
        <i class="fa-solid fa-question"></i> Sugestões dos Usuários
    </h2>

    <?php
    foreach ($sugestoes as $sug) {
        ?>

        <div class="sugTop">
            <span>
                <?php echo $sug['id_sugestao'] ?> -
                <?php echo $sug['titulo'] ?>
            </span>
            <span class="float-right">
                <a href="javascript:
                    let id_sugestao = <?php echo $sug['id_sugestao']; ?>;
                    $('#id_sugestao').val(id_sugestao);
                    $('#excluir').modal();
                " 
                type="submit" name="submit">
                    <i class="fa-solid fa-trash text-danger"></i>
                </a>
                </form>
            </span>
        </div>

        <div class="sugBot">
            <span>
                <?php echo $sug['sugestao'] ?>
            </span><br>
            <span>Data da Sugestão:
                <?php echo $sug['data'] ?>
            </span><br>
            <span>Sugestão de: <strong>
                    <?php echo $sug['nome'] ?>
                </strong></span>
            <span class="float-right">Email: <strong>
                    <?php echo $sug['email'] ?>
                </strong></span>
        </div>

        <hr>

        <?php
    }
    ?>
</main>

<?php
include_once '../../footer.php';
?>