<?php
    if (!isset($_SESSION['nivel'])) {
        echo '<script>alert("Faça login para acessar!");</script>';
        echo '<script>history.go(-1);</script>';
        echo '<script>location.reload();</script>';
    }
?>