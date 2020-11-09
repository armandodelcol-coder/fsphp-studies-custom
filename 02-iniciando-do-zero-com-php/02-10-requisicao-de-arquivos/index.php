<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);

// include não retorna um fatal error se não encontrar o arquivo.

// include "header.php";
include __DIR__ . "/header.php";

$profile = new stdClass();
$profile->name = "Robson";
$profile->company = "Upinside";
$profile->email = "cursos@upinside.com.br";
include __DIR__ . "/profile.php";

$profile = new stdClass();
$profile->name = "Kaue";
$profile->company = "Upinside";
$profile->email = "cursos@upinside.com.br";
include __DIR__ . "/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

// require retorna um fatal error se não encontrar o arquivo.

require __DIR__ . "/config.php";

echo COURSE;

// pra dar um echo em constant é necessário usar a concatenação
// porque  a constante não é interpretada dentro de aspas

echo "<h1>" . COURSE . "</h1>";
