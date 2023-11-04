<?php
// Inclui o arquivo de conexão (modifique para o nome correto do arquivo se necessário)
include('conexao.php');

// Query para buscar a última OS com status "Em processo"
$query = "SELECT id, cliente, data, problema FROM os WHERE status = 'Em processo' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conexao, $query);

// Busca os dados da última OS
$lastOS = mysqli_fetch_assoc($result);

$query1 = "SELECT id, nome, entidade, setor, problema FROM contratos WHERE status = 'Em processo' ORDER BY id DESC LIMIT 1";
$result1 = mysqli_query($conexao, $query1);

// Busca os dados do último contrato
$lastContract = mysqli_fetch_assoc($result1);

// Fecha a conexão (opcional)
mysqli_close($conexao);
?>


