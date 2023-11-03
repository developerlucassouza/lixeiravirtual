<?php
include_once 'restringe-comum.php';
include_once '../../classes/Usuarios.class.php';

if (isset($_GET['id_usuario'])) {
    $desativa = new Usuarios();
    $desativa->desativaUsuario($_GET['id_usuario']);
}
header('Location: ./');
?>