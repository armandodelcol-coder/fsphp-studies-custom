<?php

use Source\Support\Thumb;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.08 - Imagem, cache e miniaturas");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ cropper ] https://packagist.org/packages/coffeecode/cropper
 */
fullStackPHPClassSession("cropper", __LINE__);

$t = new Thumb();
var_dump($t);

/*
 * [ generate ]
 */
fullStackPHPClassSession("generate", __LINE__);

echo "<img src='{$t->make('images/2020/11/nome-do-arquivo.jpg', 300)}' alt='' title='' />";
echo "<img src='{$t->make('images/2020/11/nome-do-arquivo.jpg', 180, 180)}' alt='' title='' />";

$t->flush();
