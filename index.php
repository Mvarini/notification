<?php
require __DIR__."/lib_ext/autoload.php";

use Notification\Email;

$novoEmail  = new Email();
$novoEmail->sendMail(
    "Assunto de teste",
    "<p>Esse é um e-mail de <b>teste</b></p>",
    "marciel@2tx.com.br",
    "Marciel",
    "marciel_mav@hotmail.com",
    "Marciel"
);

var_dump($novoEmail);
