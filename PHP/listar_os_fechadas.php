<?php
// Inclui o arquivo de conexão (modifique para o nome correto do arquivo se necessário)
include('conexao.php');

// Query para buscar as três últimas OS fechadas
$query = "SELECT id, cliente, valor,telefone FROM closed_os ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conexao, $query);

$closedOSs = [];
while ($row = mysqli_fetch_assoc($result)) {
    $closedOSs[] = $row;
}

// Fecha a conexão (opcional)
mysqli_close($conexao);
?>
