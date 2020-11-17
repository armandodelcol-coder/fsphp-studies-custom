<?php

use Source\Models\UserModel;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.11 - Carregando e atualizando");

require __DIR__ . "/../source/autoload.php";

/*
 * [ save update ] Salvar o usuário ativo (Active Record)
 */
fullStackPHPClassSession("save update", __LINE__);

$model = new UserModel();

$user = $model->load(2);
$user->first_name = 'Kaue';
$user->last_name = 'Oliveira';
$user->email = 'kaue@upinside.com.br';

if ($user != $model->load(2)) {
    $user->save();
    echo "<p class='trigger warning'>Atualizado!</p>";
} else {
    echo "<p class='trigger accept'>Nenhum dado foi alterado, usuário já atualizado</p>";
}

var_dump($user);
