<?php

use PHPMailer\PHPMailer\PHPMailer;
use Source\Loading\Address;
use Source\Loading\Company;
use Source\Loading\User;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.04 - Carregamento automático");

/*
 * [ autoload spl psr-4 ] Carregamento de suas classes com spl_autoload psr-4
 */
fullStackPHPClassSession("autoload spl psr-4", __LINE__);

// require_once __DIR__ . '/source/Loading/User.php';
// require_once __DIR__ . '/source/Loading/Address.php';
// require_once __DIR__ . '/source/Loading/Company.php';

// require_once __DIR__ . '/source/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

$user = new User();
$address = new Address();
$company = new Company();

var_dump(
    $user,
    $address,
    $company
);

/*
 * [ autoload composer psr-4 ] https://getcomposer.org/doc/00-intro.md
 */
fullStackPHPClassSession("autoload composer psr-4", __LINE__);

require_once __DIR__ . '/vendor/autoload.php';

$email = new PHPMailer();
var_dump($email);
