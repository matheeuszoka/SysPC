<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require '../vendor/phpmailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contato.matheeeus@gmail.com';                     //SMTP username
    $mail->Password   = 'xbpnuawledzaxsxb';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('contato.matheeeus@gmail.com', '2R Digital');
    $mail->addAddress('matheuschampan@gmail.com', 'xD');     //Add a recipient
    $mail->addReplyTo('contato.matheeeus@gmail.com', 'Information');

    $cliente=$_GET["nome"];
    $data=$_GET["data"];
    $prioridade=$_GET["prioridade"];
    $problema=$_GET["problema"];
    $usuario=$_GET["usuario"];
    //bd return information
        $top= "Nova Os Adiciona 2R Digital.";

        $html="Olá, temos uma nova ordem de serviço adicionada.
        Cliente:$cliente</br></br>
        </br>Entrada dia:$data</br></br>
        Prioridade:$prioridade</br></br>
        Data: $data</br></br>
        Adicionado por: $usuario</br></br>
        ";
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $top;
    $mail->Body    = $html;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("Location: ../sistema.php");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
