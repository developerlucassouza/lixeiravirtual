<?php
include_once 'restringe-comum.php';
include_once '../../header.php';
include_once '../../classes/Usuarios.class.php';

if (isset($_GET['id_usuario'])) {
    $redefine = new Usuarios();
    $redefine->redefinirSenha($_GET['id_usuario']);
    // echo '
    //     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    //     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    //     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    //     <script> 
    //     $(document).ready(function() {
    //         $("#redefinida").modal();
    //     });
    //     </script>';

    echo '<script> alert("Senha redefinida para 123."); </script>';

    echo '<meta http-equiv="refresh" content="0;url=alterar.php?id_usuario='. $_GET['id_usuario'] . '">';
} else {
    echo '<meta http-equiv="refresh" content="0;url=./">';
}
?>

<!-- Modal -->
<div class="modal fade" id="redefinida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>

<?php
include_once '../../footer.php';
?>