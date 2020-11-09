<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName('Exemplo de utilização do fsphp-debuger');

/**
 * Documentando o exemplo do código
 */
fullStackPHPClassSession('1º exemplo de uma ClassSession', __LINE__);

/**
 * Todo código relacionado a uma Class Session definida acima.
 */

echo "<h1>", "Hello PHP", "</h1>";

fullStackPHPClassSession('2º exemplo de uma ClassSession', __LINE__);

/**
 * Todo código relacionado a uma Class Session definida acima.
 */

$message = "Aqui vai outro exemplo";

var_dump($message);
