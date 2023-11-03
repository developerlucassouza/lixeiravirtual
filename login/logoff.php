<?php
session_start();

// Limpar todas as variáveis de sessão
session_unset();

// Destruir a sessão
session_destroy();

// Redirecionar ou realizar outras ações após destruir a sessão, se necessário
header("Location: ../"); // Substitua "index.php" pelo URL desejado
exit();
?>