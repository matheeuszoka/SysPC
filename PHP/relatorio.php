<?php
require_once '../vendor/dompdf/vendor/autoload.php';

use Dompdf\Dompdf;

$id = $_GET['id'];
include('conexao.php');

$bd = "SELECT * FROM closed_manutencao WHERE id = $id";
$resultado = mysqli_query($conexao, $bd);
$raw = mysqli_fetch_array($resultado);


$html = '<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Relatórios SysPC</title>
    <meta name="author" content="IXCsoft.com.br">
    <meta name="description" content="Relatórios">

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28pt;
            text-align: center;
            margin-bottom: 20px;
            color: #4a4a4a;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }

        p {
            font-size: 14pt;
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-size: 14pt;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        .s1 {
            font-size: 18pt;
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 12pt;
            color: #777;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>TORRES &amp; ANSELMI LTDA</h1>
        <p>AV MANOEL RIBAS - Santa Isabel do Ivaí - PR - 87910-000</p>
        <p>CNPJ: 02.327.415/0001-08 IE: 90.199.826-42 Fone: (44) 99801-3561 </p>
        <p>
            <a href="http://www.2rtelecom.com.br" target="_blank">www.2rtelecom.com.br</a>
            <span style="margin: 0 10px;">|</span>
            <a href="mailto:adm@2rdigital.com.br" target="_blank">adm@2rdigital.com.br</a>
        </p>
        <p class="s1">Informações detalhadas das Máquinas.</p>

        <!-- Tabela -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Responsável</th>
                    <th>Entidade</th>
                    <th>Setor</th>
                    <th>Data</th>
                    <th>Senha</th>
                    <th>Resolução</th>
                    <th>AnyDesk</th>
                    <th>Senha do AnyDesk</th>
                    <th>Hostname</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>[RESPONSAVEL]</td>
                    <td>[ENTIDADE]</td>
                    <td>[SETOR]</td>
                    <td>[DATA]</td>
                    <td>[SENHA]</td>
                    <td>[RESOLUCAO]</td>
                    <td>[ANYDESK]</td>
                    <td>[PANYDESK]</td>
                    <td>[HOSTNAME]</td>
                </tr>
            </tbody>
        </table>

        <!-- Rodapé -->
        <footer>
            Criado por: Matheeuszoka
            <span style="margin: 0 10px;">|</span>
            Contato: <a href="mailto:informatica@2rdigital.com.br">informatica@2rdigital.com.br</a>
            <span style="margin: 0 10px;">|</span>
            Telefone: (44) 99764-8806
        </footer>
    </div>
</body>

</html>

';
//
$html = str_replace('[RESPONSAVEL]', $raw['responsavel'], $html);
$html = str_replace('[ENTIDADE]', $raw['entidade'], $html);
$html = str_replace('[SETOR]', $raw['setor'], $html);
$html = str_replace('[DATA]', $raw['data'], $html);
$html = str_replace('[SENHA]', $raw['senha'], $html);
$html = str_replace('[RESOLUCAO]', $raw['resolucao'], $html);
$html = str_replace('[ANYDESK]', $raw['anydesk'], $html);
$html = str_replace('[PANYDESK]', $raw['PassANY'], $html);
$html = str_replace('[HOSTNAME]', $raw['hostname'], $html);



$dompdf = new Dompdf(array('enable_remote' => true));
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream('relatório.pdf', ['Attachment' => false]);
