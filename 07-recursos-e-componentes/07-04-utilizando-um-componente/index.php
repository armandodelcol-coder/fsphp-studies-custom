<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.04 - Utilizando um componente");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ instance ] https://packagist.org/packages/phpmailer/phpmailer
 */
fullStackPHPClassSession("instance", __LINE__);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailException;

$phpMailer = new PHPMailer();
var_dump($phpMailer instanceof PHPMailer);

/*
 * [ configure ]
 */
fullStackPHPClassSession("configure", __LINE__);

try {
    $mail = new PHPMailer(true);

    // CONFIG
    $mail->isSMTP();
    $mail->setLanguage('br');
    $mail->isHTML(true);
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->CharSet = 'utf-8';

    // AUTH
    // Dados omitidos por segurança... Verificar no Sendgrid->Setup Guide->Integrate using SMTP Relay.
    $mail->Host = '';
    $mail->Username = '';
    $mail->Password = '';
    $mail->Port = ''; // De acordo com SMTPSecure TLS

    // MAIL
    $mail->setFrom('atdc.codemaster@gmail.com', 'Armando T. Del Col');
    $mail->Subject = 'Este é meu envio via componente no FSPHP';
    $mail->msgHTML("<h1>Olá Mundo</h1><p>Esse é meu primeiro disparo de e-mail.</p>");

    // SEND
    $mail->addAddress('armandodelcol@yahoo.com.br', 'Armando');
    $send = $mail->send();

    var_dump($send);
} catch (MailException $exception) {
    echo message()->error($exception->getMessage());
}
