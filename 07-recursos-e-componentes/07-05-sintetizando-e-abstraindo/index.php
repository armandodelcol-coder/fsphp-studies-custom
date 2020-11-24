<?php

use Source\Core\Email;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.05 - Sintetizando e abstraindo");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ synthesize ]
 */
fullStackPHPClassSession("synthesize", __LINE__);

$email = (new Email())->bootstrap(
    'Olá mundo, esse é o meu e-mail',
    "<h1>Olá Mundo</h1><p>Testando o envio de e-mail FSPHP</p>",
    'armandodelcol@yahoo.com.br',
    'Armando'
);

// var_dump($email);

$email->attach(__DIR__ . '/../../wallpaper/wallpaper-fsphp-default.jpg', 'FSPHP');

if ($email->send()) {
    echo message()->success('E-mail enviado com sucesso!');
} else {
    echo $email->message();
}
