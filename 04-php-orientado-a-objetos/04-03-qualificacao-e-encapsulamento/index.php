<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require_once __DIR__ . '/classes/App/Template.php';
require_once __DIR__ . '/classes/Web/Template.php';

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump(
    $appTemplate,
    $webTemplate
);

use App\Template;
use Source\Qualifield\User;
use Web\Template as WebTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

var_dump(
    $appUseTemplate,
    $webUseTemplate
);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */

fullStackPHPClassSession("visibilidade", __LINE__);

require_once __DIR__ . '/source/Qualifield/User.php';

$user = new User();

// $user->setFirstName('Armando');
// $user->setLastName('Del Col');

var_dump(
    $user,
    get_class_methods($user)
);

// echo "<p>O e-mail de {$user->getFirstName()} é {$user->getEmail()}</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$robson = $user->setUser('Robson', 'Leite', 'cursos@upinside.com.br');
$kaue = new User();
$kaue->setUser('Kaue', 'Cardoso', 'cursos@upinside.com.br');
$gah = new User();
$gah->setUser('Gah', 'Morandi', 'cursos@upinside.com.br');

if (!$robson) {
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

var_dump(
    $user,
    $kaue,
    $gah
);
