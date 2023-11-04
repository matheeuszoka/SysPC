<?php
session_start(); // Iniciar a sessão no início do arquivo

// Verifique se o usuário está logado, caso contrário, redirecione para a página de login
if (!isset($_SESSION['usuario_logado'])) {
    header('Location: index.php');
    exit();
}

//echo "Bem-vindo, " . $_SESSION['usuario_logado'] . "!";
?>
