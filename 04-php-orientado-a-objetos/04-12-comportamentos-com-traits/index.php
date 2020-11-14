<?php

use Source\Traits\Address;
use Source\Traits\Cart;
use Source\Traits\Register;
use Source\Traits\User;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.12 - Comportamentos com traits");

require __DIR__ . "/source/autoload.php";

/*
 * [ trait ] São traços de código que podem ser reutilizados por mais de uma classe. Um trait é como um compoetamento
 * do objeto (BEHAVES LIKE). http://php.net/manual/pt_BR/language.oop5.traits.php
 */
fullStackPHPClassSession("trait", __LINE__);

$user = new User('Robson', 'Leite', 'cursos@upinside.com.br');
$address = new Address('Nome da Rua', 3339, 'casa 10');

$register = new Register(
    $user,
    $address
);

var_dump(
    $register,
    $register->getUser(),
    $register->getAddress(),
    $register->getUser()->getFirstName(),
    $register->getAddress()->getStreet()
);

$cart = new Cart();
$cart->add(1, 'Full Stack PHP Developer', 2, 2000);
$cart->add(2, 'Laravel Developer', 2, 1000);
$cart->add(3, 'WS PHP', 5, 500);
$cart->remove(1, 1);
$cart->remove(2, 1);

$cart->checkout($user, $address);

// var_dump($cart);
