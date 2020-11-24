<?php

use Source\App\Controllers\UsersController;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.11 - Uma camada de controle");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ controller ] A camada que consulta o modelo e devolve a visão
 */
fullStackPHPClassSession("controller", __LINE__);

$controller = new UsersController();

if (empty($_GET['id'])) {
    $controller->home();
} else {
    $controller->edit();
}
