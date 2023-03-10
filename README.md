# Email notification library using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this action in an uncomplicated way is essential 
for any system.

To install the library, run the following command:

```sh
composer require gustavoweb/composer_teste
```

To make use of the library, just request composer's autoload, invoke the class and call the method:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
     "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that all the email sending configuration is using the magic constructor method! Once the constructor method has been invoked 
within your application, your system will be ready to fire.

