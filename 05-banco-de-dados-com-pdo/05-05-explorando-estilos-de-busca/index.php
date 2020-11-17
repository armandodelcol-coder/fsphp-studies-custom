<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.05 - Explorando estilos de busca");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;
use Source\Database\Entity\UserEntity;

/*
 * [ fetch ] http://php.net/manual/pt_BR/pdostatement.fetch.php
 */

fullStackPHPClassSession("fetch", __LINE__);

$connect = Connect::getInstance();
$read = $connect->query('SELECT * FROM users LIMIT 3');

if (!$read->rowCount()) {
    echo "<p class='trigger warning'>Não obteve resultados</p>";
} else {
    // O fetch é armazenado em buffer
    // otimiza a leiteura
    // No primeiro var_dump ele lê a primeira consulta
    // no while e começa a contar a partir dessa primeira consulta (Otimização)
    var_dump($read->fetch());

    while ($user = $read->fetch()) {
        var_dump($user);
    }

    var_dump($read->fetch()); // Como já percorri os resultados aqui retorna "false"
}

/*
 * [ fetch all ] http://php.net/manual/pt_BR/pdostatement.fetchall.php
 */
fullStackPHPClassSession("fetch all", __LINE__);

$read = $connect->query('SELECT * FROM users LIMIT 3,2');

/*
while ($user = $read->fetchAll()) {
    var_dump($user);
}
*/

// o fetchAll retorna um array com todos os resultados, por isso podemos usar um foreach
foreach ($read->fetchAll() as $user) {
    var_dump($user);
}

/*
 * [ fetch save ] Realziar um fetch diretamente em um PDOStatement resulta em um clear no buffer da consulta. Você
 * pode armazenar esse resultado em uma variável para manipilar e exibir posteriormente.
 */
fullStackPHPClassSession("fetch save", __LINE__);

$read = $connect->query('SELECT * FROM users LIMIT 5,1');
$result = $read->fetchAll();

var_dump($read->fetchAll(), $result);

/*
 * [ fetch modes ] http://php.net/manual/pt_BR/pdostatement.fetch.php
 */
fullStackPHPClassSession("fetch styles", __LINE__);

$read = $connect->query('SELECT * FROM users LIMIT 1');
foreach ($read->fetchAll() as $user) {
    var_dump($user);
}

$read = $connect->query('SELECT * FROM users LIMIT 1');
foreach ($read->fetchAll(PDO::FETCH_NUM) as $user) {
    var_dump($user);
}

// o ASSOC ATUALMENTE É O MAIS RÁPIDO, PORÉM COM O NOSSO DEFAULT OBJ
// CONFIGURADO NO CONNECT GANHAMOS EM LEGIBILIDADE DE CÓDIGO E A COMPARAÇÃO
// EM PERFORMANCE COM O ASSOC NÃO É TÃO SIGNIFICATIVA
$read = $connect->query('SELECT * FROM users LIMIT 1');
foreach ($read->fetchAll(PDO::FETCH_ASSOC) as $user) {
    var_dump($user);
}

$read = $connect->query('SELECT * FROM users LIMIT 1');
foreach ($read->fetchAll(PDO::FETCH_CLASS, UserEntity::class) as $user) {
    /** @var UserEntity $user */
    var_dump($user, $user->getFirstName());
}
