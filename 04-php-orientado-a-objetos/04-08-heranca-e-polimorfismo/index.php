<?php

use Source\Inheritance\Address;
use Source\Inheritance\Event\Event;
use Source\Inheritance\Event\EventLive;
use Source\Inheritance\Event\EventOnline;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new Event(
    'Workshop FSPHP',
    new DateTime('2019-05-20 16:00'),
    2500,
    4
);

var_dump($event);

$event->register('Robson Leite', 'cursos@upinside.com.br');
$event->register('Kaue Cardoso', 'cursos@upinside.com.br');
$event->register('Gah Morandi', 'cursos@upinside.com.br');
$event->register('Gustavo Santos', 'cursos@upinside.com.br');
$event->register('João da Silva', 'cursos@upinside.com.br');

var_dump($event);

/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$address = new Address(
    'Rua dos Eventos',
    1287
);
$event = new EventLive(
    'Workshop FSPHP',
    new DateTime('2019-05-20 16:00'),
    2500,
    4,
    $address
);

var_dump($event);

$event->register('Robson Leite', 'cursos@upinside.com.br');
$event->register('Kaue Cardoso', 'cursos@upinside.com.br');
$event->register('Gah Morandi', 'cursos@upinside.com.br');
$event->register('Gustavo Santos', 'cursos@upinside.com.br');
$event->register('João da Silva', 'cursos@upinside.com.br');

/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new EventOnline(
    'Workshop FSPHP',
    new DateTime('2019-05-20 16:00'),
    197,
    'http://upinside.com.br/aovivo'
);

var_dump($event);

$event->register('Robson Leite', 'cursos@upinside.com.br');
$event->register('Kaue Cardoso', 'cursos@upinside.com.br');
$event->register('Gah Morandi', 'cursos@upinside.com.br');
$event->register('Gustavo Santos', 'cursos@upinside.com.br');
$event->register('João da Silva', 'cursos@upinside.com.br');

var_dump($event);
