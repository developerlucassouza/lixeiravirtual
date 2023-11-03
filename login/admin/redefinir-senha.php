<?php
include_once 'restringe-comum.php';
include_once '../../header.php';
include_once '../../classes/Usuarios.class.php';

if (isset($_GET['id_usuario'])) {
    $redefine = new Usuarios();
    $redefine->redefinirSenha($_GET['id_usuario']);
    echo '<script>alert("Senha redefinida!");</script>';
    echo '<meta http-equiv="refresh" content="0;url=alterar.php?id_usuario='. $_GET['id_usuario'] . '">';
} else {
    echo '<meta http-equiv="refresh" content="0;url=./">';
}
?>