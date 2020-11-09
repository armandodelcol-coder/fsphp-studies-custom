<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName('02.03 - Comandos de saída');

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

/**
 * É o comando de saída mais permissivo
 */

echo "<h1>PHP Raiz!</h1>";
echo "<h2>" . "Echo com Contatenação" . " " . "xP" . "</h2>";
echo "<h2>", "Echo por parâmetros", "</h2>";

$hello = "Olá Mundo!";
$message = "PHP é uma linguagem fantástica";
$codeSlogan = "<span class='tag'>#BoraProgramar!</span>";

echo "<h3>{$hello} {$message} {$codeSlogan}</h3>";
?>

<p>Também é possível utilizar o echo como short sintaxe: <?= $codeSlogan; ?></p>

<?php
/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

/**
 * Quase a mesma coisa que o echo masnão aceita parâmetros para exibir
 */

print $hello . " PHP";
print "<h2>{$message}</h2>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

/**
 * Serve para imprimir na tela arrays/vetores
 */

$array = [
    "company" => "UpInside",
    "course" => "FSPHP",
    "class" => "Comandos de saída",
    "message" => "print_r serve para imprimir array",
];

print_r($array);

/**
 * Também tem como usar o print_r como um retorno para armazenar em uma variável, exemplo:
 */

$printRVariable = print_r($array, true);

echo "<pre>", $printRVariable, "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

/**
 * Serve para imprimir uma string formatada
 */

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$codeSlogan}";
$subtitle = "Um texto qualquer";

printf($article, $title, $subtitle);

$printFVariable = sprintf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

/**
 * Serve para imprimir uma string formatada passando um array como argumento
 */

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array);
echo vsprintf($company, $array); // vsprintf serve para retornar o vprintf


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

/**
 * Para debugar arrays, variáveis, objetos, etc
 */

var_dump($array);
