<?php
require_once '../vendor/dompdf/vendor/autoload.php';

use Dompdf\Dompdf;

include("conexao.php");
$id = $_GET["id"];
$bd = "SELECT * FROM os WHERE id = $id";
        $resultado = mysqli_query($conexao, $bd);
        $raw = mysqli_fetch_array($resultado);
        

        
$data = $raw['data'];
$entrega = $raw['previsao'];
$data_formatada = date("d/m/Y", strtotime($data));
$prev_formatada = date("d/m/Y", strtotime($entrega));


$html = '
<html>
<head>
<title>Ordem de Serviço Nº[ID]</title>
<link rel="shortcut icon" href="http://192.168.2.254/SysPC/img/logo2r.jpeg" type="image/x-icon">

    <style>
    @media print {
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        @page {
            size: 80mm 300mm;
        }

        button#printButton, button#homeButton {
            display: none;
        }
    }

    body {
        font-family: Arial, sans-serif;
        padding: 15px;
        color: #333;
    }

    h1 {
        text-align: center;
        font-size: 14pt;
        margin-bottom: 10mm;
        color: #2c3e50;
        border-bottom: 1px solid #2c3e50;
        padding-bottom: 5mm;
    }

    .info {
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .info > div {
        margin-bottom: 2mm;
        line-height: 1.4;
        font-size: 12pt;
    }

    .label {
        font-weight: bold;
        display: inline-block;
        width: 150px;
    }

    footer {
        font-size: 9pt;
        text-align: center;
        margin-top: 5mm;
        color: #7f8c8d;
    }

    </style>
</head>
<body>
    <h1>Ordem de Serviço</h1>

    <div class="info">
        <div><span class="label">Cliente:</span> [CLIENTE]</div>
        <div><span class="label">Telefone:</span>[TELEFONE]</div>
        <div><span class="label">Data:</span> [DFORMATADA]</div>
        <div><span class="label">Entrega dia:</span>[PFORMATADA]</div>
        <div><span class="label">Problema:</span> [PROBLEMA]</div>
        <div><span class="label">Senha:</span> [SENHA]</div>
        <div><span class="label">Usuário:</span> [USUARIO]</div>
    </div>

    <footer>
        Obrigado por escolher nossos serviços!
    </footer>
</body>
</html>

';
$html = str_replace('[ID]', $id, $html);
$html = str_replace('[CLIENTE]', $raw['cliente'], $html);
$html = str_replace('[TELEFONE]', $raw['telefone'], $html);
$html = str_replace('[DFORMATADA]', $data_formatada, $html);
$html = str_replace('[PFORMATADA]', $prev_formatada, $html);
$html = str_replace('[PROBLEMA]', $raw['problema'], $html);
$html = str_replace('[SENHA]', $raw['senha'], $html);
$html = str_replace('[USUARIO]', $raw['user'], $html);


$dompdf = new Dompdf(array('enable_remote' => true));
$dompdf->loadHtml($html);
$dompdf->setPaper(array(0, 0, 226.4, 849), 'portrait'); // Configuração para 80mm de largura e 30cm de altura.
$dompdf->render();
$dompdf->stream('ordem_de_servico.pdf', ['Attachment' => false]);
