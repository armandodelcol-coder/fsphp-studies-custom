<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    require __DIR__ . "/../vendor/autoload.php";

    use Source\Support\Seo;

    $seo = new Seo();
    echo $seo->render(
        'Formação Full Stack PHP Developer',
        'O Full Stack PHP Developer (FSPHP) é uma formação completa que especializa o aluno em todas as tecnologias necessárias tanto de front-end quanto de back-end para desenvolver projetos profissionais e de alto valor de mercado ao mesmo tempo que é a melhor, mais completa e moderna especialização PHP atualmente.',
        'https://upinside.com.br/fsphp',
        'https://upinside.com.br/fsphp/images/cover.jpg'
    );
    ?>
</head>

<body>
    <h1><?= $seo->title; ?></h1>
    <p><?= $seo->description; ?></p>

    <?= "<pre>", print_r($seo->data(), true), "</pre>" ?>;
</body>

</html>