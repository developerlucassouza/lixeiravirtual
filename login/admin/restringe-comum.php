<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 0) {
    echo '<script>alert("Você não tem acesso");</script>';
    echo '<script>history.go(-1);</script>';
}
?>
