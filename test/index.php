<?php
require __DIR__."/../lib_ext/autoload.php";

use Notification\Email;

$novoEmail  = new Email(
    2,
    "mail.2tx.com.br",
    "marciel@2tx.com.br",
    "@Varini#!2020",
    "ssl",
    465,
    "marciel@2tx.com.br",
    "Equipe Marciel"
);
$novoEmail->sendMail(
    "Assunto de teste",
    "<p>Esse é um e-mail de <b>teste</b></p>",
    "marciel@2tx.com.br",
    "Marciel",
    "marciel_mav@hotmail.com",
    "Marciel"
);

var_dump($novoEmail);
