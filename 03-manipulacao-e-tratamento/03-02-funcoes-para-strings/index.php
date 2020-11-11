<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

// Utilizar o multibyte para fazer tratamento de strings
// Porque o PHP é uma linguagem em inglês e alguns caracteres como ç ou com acento
// podem ser considerados com mais de um caractere na hora de manipular a string.
$string = "O último show do AC\DC foi incrível!";

var_dump([
    "string" => $string,
    "strlen" => strlen($string),
    "mb_strlen" => mb_strlen($string),
    "substr" => substr($string, 9),
    "mb_substr" => mb_substr($string, 9),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string),
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString = $string;

var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString),
    "mb_strtolower" => mb_strtolower($mbString),
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE),
]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbString . " Fui, iria novamente, foi épico!";

var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
    "mb_substr" => mb_substr($mbReplace, 40 + 2, 14),
    "mb_strstr" => mb_strstr($mbReplace, ", ", true),
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true),
]);

$mbStrReplace = $string;

echo "<p>", $string, "</p>";
echo "<p>", str_replace("AC\DC", "Iron Maiden", $mbStrReplace), "</p>";
echo "<p>", str_replace(["AC\DC", "eu fui", "último"], "Iron Maiden", $mbStrReplace), "</p>";
echo "<p>", str_replace(["AC\DC", "incrível"], ["Iron Maiden", "épico"], $mbStrReplace), "</p>";

$article = <<<ROCK
    <article>
        <h3>event</h3>
        <p>desc</p>
    </article>
ROCK;

$articleData = [
    "event" => "Rock in Rio",
    "desc" => $mbReplace,
];

// Uma forma utilizando das funções de array para traduzir esse código:
// str_replace(["event", "desc"], ["Rock in Rio", $mbReplace], $article)
// Estou alimentando o meu article com as varíaveis desejadas.
echo str_replace(array_keys($articleData), array_values($articleData), $article);

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=Robson&email=curso@upinside.com.br";
// Essa função cria a variável passada no 2 parâmetro ($parseEndPoint)
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint,
    (object) $parseEndPoint,
]);
