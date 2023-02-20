<?php
require __DIR__."/../lib_ext/autoload.php";

use Notification\Email;

$novoEmail  = new Email(
    2,
    "mail.teste.com.br",
    "teste@teste.com.br",
    "@teste123",
    "ssl",
    465,
    "teste@teste.com",
    "Equipe Teste"
);
$novoEmail->sendMail(
    "Assunto de teste",
    "<p>Esse é um e-mail de <b>teste</b></p>",
    "teste@teste.com.br",
    "Teste",
    "teste@teste.com.br",
    "Teste"
);

var_dump($novoEmail);
