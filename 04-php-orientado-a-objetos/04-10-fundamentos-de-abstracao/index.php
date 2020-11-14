<?php

use Source\App\User;
use Source\Bank\Account;
use Source\Bank\AccountCurrent;
use Source\Bank\AccountSaving;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.10 - Fundamentos da abstração");

require __DIR__ . "/source/autoload.php";

/*
 * [ superclass ] É uma classe criada como modelo e regra para ser herdada por outras classes,
 * mas nunca para ser instanciada por um objeto.
 */
fullStackPHPClassSession("superclass", __LINE__);

$client = new User('Robson', 'Leite');
/* $account = new Account(
    '1600',
    '22345',
    $client,
    1000
); */
var_dump(
    // $account,
    $client
);

/*
 * [ especialização ] É uma classe filha que implementa a superclasse e se especializa
 * com suas prórpias rotinas
 */
fullStackPHPClassSession("especialização.a", __LINE__);

$saving = new AccountSaving(
    '1600',
    '22345',
    $client,
    1000
);

var_dump($saving);

$saving->deposit(1000);
$saving->withDraw(1500);
$saving->withDraw(1006);

$saving->extract();

/*
 * [ especialização ] É uma classe filha que implementa a superclass e se especializa
 * com suas prórpias rotinas
 */
fullStackPHPClassSession("especialização.b", __LINE__);

$current = new AccountCurrent(
    '1655',
    '22346',
    $client,
    1000,
    1000
);

var_dump($current);

$current->deposit(1000);
$current->withDraw(1500);
$current->withDraw(1006);

$current->extract();
