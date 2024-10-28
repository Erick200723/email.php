<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = ''; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port = 587;

    $mail->setFrom('');
    $mail->addAddress(''); 

    $mail->isHTML(true);
    $mail->Subject = 'Teste do codigo do Erick';
    $mail->Body = 'teste do codigo de <strong>email?</strong>';
    $mail->AltBody = 'tais orgulhoso mestre';

    if ($mail->send()) {
        echo 'O email foi enviado';
    } else {
        echo 'O email não foi enviado';
    }

} catch (Exception $e) {
    echo "ERRO ao enviar a mensagem: {$mail->ErrorInfo}";
}
