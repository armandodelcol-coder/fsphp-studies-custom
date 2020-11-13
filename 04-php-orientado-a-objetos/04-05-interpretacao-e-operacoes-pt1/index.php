<?php

use Source\Interpretation\User;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

$user = new User('Armando', 'Del Col', 'armando@gmail.com.br');

var_dump($user);

/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

// Os objetos são atribuidos a variáveis por referência, para realmente duplicar
// precisamos clonar.

$kaue = clone $user;
var_dump(
    $user,
    $kaue
);
$gustavo = clone $kaue;
$gustavo->setFirstName('Gustavo');
$gustavo = null;

$kaue->setFirstName('Kaue');
$kaue->setLastName('Cardoso');

var_dump(
    $user,
    $kaue
);

/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);
