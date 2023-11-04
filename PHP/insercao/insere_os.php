<?php
$cliente=$_POST["cliente"];
$telefone=$_POST["telefone"];
$prioridade=$_POST["prioridade"];
$data=$_POST["data"];
$entrada=$_POST["data"];
$senha=$_POST["senha"];
$problema=$_POST["problema"];
$status=$_POST["status"];
$usuario=$_POST["usuario"];

include("../conexao.php");
$telefone = preg_replace('/\D/', '', $telefone);

$formattedTelefone = '('.substr($telefone, 0, 2).') '.substr($telefone, 2, 5).'-'.substr($telefone, 7);


if ($prioridade == "sim") {
    // Separar a data em partes
    $partesData = explode("-", $data);
    $ano = $partesData[0];
    $mes = $partesData[1];
    $dia = $partesData[2];

    // Adicionar 2 dias
    $dia += 2;

    // Reconstruir a data
    $data = $ano . "-" . $mes . "-" . $dia;
} else if ($prioridade == "nao") {
    // Adicionar 7 dias
    $data = date('Y-m-d', strtotime($data . ' +7 days'));
}
$insere= "insert into os (cliente,telefone,prioridade,data,senha,problema,previsao,status,user) values ('$cliente', '$formattedTelefone', '$prioridade', '$entrada', '$senha','$problema','$data','$status','$usuario')";
mysqli_query($conexao, $insere);

$params = [
    'nome' => $cliente,
    'data' => $data,
    'prioridade' => $prioridade,
    'problema' => $problema,
    'usuario' => $usuario
];

$query_string = http_build_query($params);

header("Location: ../envio.php?" . $query_string);



?>