<?php
include('conexao.php');

// Consulta para obter ambas as contagens da tabela os
$sql = "SELECT 
    COUNT(*) as total_os,
    SUM(CASE WHEN status = 'Em Processo' AND prioridade = 'Sim' THEN 1 ELSE 0 END) as total_aberto_prioridade
FROM os";

$resultado = mysqli_query($conexao, $sql);

if($row = mysqli_fetch_assoc($resultado)) {
    $total_os = $row['total_os'];
    $total_aberto_prioridade = $row['total_aberto_prioridade'];
} else {
    $total_os = 0;
    $total_aberto_prioridade = 0;
}

// Consulta para contar OS com status 'Em processo' da tabela Contratos
$sql_contratos = "SELECT COUNT(*) as total_contratos_em_processo FROM Contratos WHERE status = 'Em processo'";
$resultado_contratos = mysqli_query($conexao, $sql_contratos);

if($row = mysqli_fetch_assoc($resultado_contratos)) {
    $total_contratos_em_processo = $row['total_contratos_em_processo'];
} else {
    $total_contratos_em_processo = 0;
}

// Consulta para somar todos os valores da tabela closed_os
$sql_closed_os = "SELECT SUM(valor) as total_valor_closed_os FROM closed_os";
$resultado_closed_os = mysqli_query($conexao, $sql_closed_os);

if($row = mysqli_fetch_assoc($resultado_closed_os)) {
    $total_valor_closed_os = $row['total_valor_closed_os'];
} else {
    $total_valor_closed_os = 0;
}

?>
