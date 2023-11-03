<?php
include_once 'restringe-comum.php';
include_once '../../classes/Usuarios.class.php';

if (isset($_GET['id_usuario'])) {
    $excloi = new Usuarios();
    $excloi -> excluiUsuario($_GET['id_usuario']);
}
header('Location: ./');

?>