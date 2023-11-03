<?php
include_once 'restringe-comum.php';
include_once '../../classes/Usuarios.class.php';

if (isset($_GET['id_usuario'])) {
    $ativa = new Usuarios();
    $ativa->ativaUsuario($_GET['id_usuario']);
}
header('Location: ./');
?>