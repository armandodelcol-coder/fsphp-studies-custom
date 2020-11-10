<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COURSE", "Full Stack PHP"); // Runtime
const AUTHOR = "Robson"; // Compile Time

$formation = true;

if ($formation) {
    define("COURSE_TYPE", "Formação");
    // const TESTE = "teste"; // erro
} else {
    define("COURSE_TYPE", "Curso");
}

// Não conseguimos interpretar constantes em aspas ou protegidas {}

echo "<p>" . COURSE_TYPE . "</p>";
echo "<p>", AUTHOR, "</p>";

// Em classe não consigo usar o define, usamos const
class OnClass
{
    const USER = 'root';
    const HOST = 'localhost';

    public function getArg()
    {
        return self::USER;
    }
}

echo "<p>" . (new OnClass)->getArg() . "</p>";
echo "<p>", OnClass::HOST, "</p>";

var_dump(get_defined_constants(true)["user"]);

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

// Constantes já definas pelo PHP

var_dump([
    __LINE__,
    __FILE__,
    __DIR__,
]);

function fullStackPHP()
{
    return __FUNCTION__;
}

var_dump(fullStackPHP());

trait MyTrait
{
    public $traitName = __TRAIT__;
}

class FsPHP
{
    use MyTrait;
    public $className = __CLASS__;
}

var_dump(new FsPHP());

require_once __DIR__ . "/MyClass.php";

var_dump(new \Source\MyClass());
var_dump(\Source\MyClass::class);
