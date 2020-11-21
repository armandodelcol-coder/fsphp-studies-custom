<?php

use Source\Models\User;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.13 - Verificando password com hash");

require __DIR__ . "/../source/autoload.php";

/*
 * [ hash ]
 */
fullStackPHPClassSession("hash", __LINE__);

$user = (new User())->findById(5);
// $user->password = 12345678;
$user->save();

var_dump(
    $user,
    password_get_info('12345678'),
    password_get_info(passwd('12345678'))
);
