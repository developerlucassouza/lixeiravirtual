<?php
include_once 'restringe-comum.php';
include_once '../../header.php';
include_once '../../classes/Usuarios.class.php';

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];

    if (empty($nome) or empty($email)) {
        echo '<script>alert("Preencha todos os campos");</script>';
    } else {
        $insere = new Usuarios();
        $insere->insereUsuario($nome, $email, '123', $nivel);
    }
}
echo '<meta http-equiv="refresh" content="0;url=./">';
?>

