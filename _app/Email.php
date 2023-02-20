<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mail = \stdClass::class;
    public function __construct()
    {

        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $this->mail->isSMTP();                                            //Send using SMTP
        $this->mail->Host = 'mail.2tx.com.br';                     //Set the SMTP server to send through
        $this->mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $this->mail->Username = 'marciel@2tx.com.br';                     //SMTP username
        $this->mail->Password = '@Varini#!2020';                               //SMTP password
        $this->mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $this->mail->Port = 465;                                    //TCP port to connect to; use 587 if you have
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage = 'br';
        $this->mail->isHTML(true);



        //Recipients
        $this->mail->setFrom('marciel@2tx.com.br', 'Equipe Marciel');

    }
    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName){
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        }catch (\Exception $e){
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
        echo "E-mail enviado!";
    }
}