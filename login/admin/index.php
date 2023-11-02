<?php
session_start();
if ($_SESSION['nivel'] != 0) {
    echo '<script>alert("Você não tem acesso");</script>';
    echo '<script>history.go(-1);</script>';
}
?>