<?php
// Inclua a classe do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function enviarEmail($subject,$message){
    $subject = 'Nova Mensagem';
    $user_email = 'email_a_receber' ;
    $user_nome = 'Paulo Ferreira';
    $host = 'host.com';
    $port = '123';
    $username = 'email_remetente';
    $password = 'senha_email';


    // Instancie o objeto do PHPMailera
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->SMTPAuth = true;
        $mail->Username = $username; // Substitua pelo seu e-mail
        $mail->Password = $password; // Substitua pela sua senha
        $mail->SMTPSecure = 'ssl';
        $mail->Port = $port; 

        // Configurações do e-mail
        $mail->setFrom($username, 'Paulo Develop'); // Substitua pelo seu e-mail e nome
        $mail->addAddress($user_email, $user_nome); // Substitua pelo e-mail e nome do destinatário
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Envia o e-mail
        $mail->send();
        
        return "E-mail enviado com sucesso!";
    } catch (Exception $e) {
        return "Erro ao enviar e-mail: , $mail->ErrorInfo";
    }
}
