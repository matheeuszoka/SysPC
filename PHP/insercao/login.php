<?php
session_start();

include("../conexao.php");

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conexao->query($query);

    if ($result && $result->num_rows > 0) {
        // Usuário e senha estão corretos
        $_SESSION['usuario_logado'] = $usuario;
        header('Location: ../../sistema.php');
        exit();
    } else {
        echo '<script>alert("Usuário ou senha incorretos!"); window.location.href="../../index.php";</script>';
    }
} else {
    header('Location: login.html');
    exit();
}

$conexao->close();
?>
