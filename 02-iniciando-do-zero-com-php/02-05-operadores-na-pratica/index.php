<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

/**
 * Atribuição é dizer que o valor da esquerda recebe o valor da direita
 * sendo o valor da esquerda uma forma de representar o valor da direita no código
 * o operador de atribuição é o =
 */
$a = 5;
$b = ($a * 2) - 3;
$c = &$a;

$article = "<article><h1>%s</h1><p class='tag'>%s</p></article>";
printf($article, '$a recebe 5', "\$a representa o valor {$a}");
printf($article, '$b recebe ($a * 2) - 3', "\$b representa o valor {$b}");
printf($article, '$c recebe uma refência para $a', "\$c aponta para a mesmo lugar do valor de {$a}");
$a = 7;
printf($article, 'por isso se $a receber 7', "\$c aponta para a mesmo lugar então representa {$c}");
$a++;
printf($article, '$a++ é a mesma coisa que incrementar 1 no valor que $a', "\$a representa {$a}");

$array = [
    'a--' => $a--,
    'a' => $a,
    '++a' => ++$a,
    'a.=OI' => $a .= 'OI'
];

var_dump($array);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$comparadores = [
    '==', '===', '!=', '<>', '>', '<', '>=', '<=', '<==>'
];
$article2 =
    "<article><h1>Comparadores</h1>
        <p class='tag'>%s</p>
        <p class='tag'>%s</p>
        <p class='tag'>%s</p>
        <p class='tag'>%s</p>
        <p class='tag'>%s</p>
        <p class='tag'>%s</p>
        <p class='tag'>%s</p>
        <p class='tag'>%s</p>
        <p class='tag'>%s</p>
    </article>";

vprintf($article2, $comparadores);

$a = 5;
$b = '5';
printf($article, "\$a=5 e \$b='5'", "\$a == \$b ? ");
var_dump($a == $b);
printf($article, "\$a=5 e \$b='5'", "\$a === \$b ? ");
var_dump($a === $b);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;

$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a" => ($logicA),
    "!a" => (!$logicA),
    "!b" => ($logicB),
];

var_dump($logic);


/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;

$calc = [
    'a + b' => ($calcA + $calcB),
    'a - b' => ($calcA - $calcB),
    'a * b' => ($calcA * $calcB),
    'a / b' => ($calcA / $calcB),
    'a % b' => ($calcA % $calcB), // resto da divisao
];

var_dump($calc);
