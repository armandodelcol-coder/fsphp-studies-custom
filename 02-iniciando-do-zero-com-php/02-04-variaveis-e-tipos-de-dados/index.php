<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

/**
 * Variaáveis para armazenar valores em código PHP
 * é um recurso comum da maioria das linguagens de Programação
 */

$userFirstName = 'Armando Tadeu';
$userLastName = 'Del Col';
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$userAge = 26;
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge} anos</span></p>";

$calcA = 10;
$calcB = &$calcA;
/**
 * Armazena uma refênrencia para a variável $calcA, 
 * assim as duas estão apontando para o mesmo lugar na 
 * memória ram, por isso exibem o mesmo valor
 */

$calcB = 5;

var_dump([
    'a' => $calcA,
    'b' => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

/**
 * Para fazer verificações de verdadeiro ou falso
 */

$bestAge = $userAge > 30;
echo '<p>Idade é maior que 30 ?</p>';
$bestAge ? var_dump(true) : var_dump(false);

/**
 * Todo valor 0, "", array vazio e null é false em PHP
 */
if (0 || 0.0 || "" || [] || null) {
    var_dump(true);
} else {
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

/**
 * Callback é acionar uma função dentro de outra função
 * por exemplo call_user_func vai chamar uma função passada como string
 * e o segundo parâmetro é o parâmetro para a função acionada
 */

$code = "<article><h1>Um call user function!</h1></article>";
$codeClear = call_user_func('strip_tags', $code);
var_dump($code, $codeClear);

$codeMore = function ($code) {
    var_dump($code);
};
$codeMore("#BoraProgramar");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = 'Olá Mundo';
$array = [1, 2, 3, $string];
$objeto = new stdClass;
$objeto->name = 'PHP';
$int = 25;
$float = 1.1125;
$null = null;

var_dump([
    $string,
    $array,
    $objeto,
    $int,
    $float,
    $null
]);
