<?php

use Source\Core\Router;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.12 - Desmistificando rotas");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ routes ]
 */
fullStackPHPClassSession("routes", __LINE__);

Router::get('/', 'UsersController:home');
Router::get('/editar', 'UsersController:edit');

Router::get('/rotas', function () {
    var_dump(Router::routes());
});
