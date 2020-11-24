<?php

use Source\Core\Session;

$v->layout('test::base'); ?>

<?= (new Session())->flash(); ?>

<?php foreach ($list as $user) : ?>
    <article>
        <h1><?= "{$user->first_name} {$user->last_name}"; ?></h1>
        <p><?= "{$user->email}"; ?> - Registrado em <?= date_fmt($user->created_at); ?></p>
        <a href="?id=<?= $user->id; ?>" title='editar'>Editar</a>
    </article>
<?php endforeach; ?>