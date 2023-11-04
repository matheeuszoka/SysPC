<?php
include("../conexao.php");
$id = $_POST['id'];
$entidade = $_POST['entidade'];
$setor = $_POST['setor'];
$responsavel = $_POST['responsavel'];
$data = $_POST['data'];
$senha = $_POST['senha'];
$problema = $_POST['problema'];
$update = "UPDATE contratos SET entidade='$entidade',setor='$setor', nome='$responsavel',data='$data', senha='$senha',problema='$problema' WHERE id=$id";
mysqli_query($conexao, $update);

//echo "$update";
header("Location: ../../sistema.php");

?>