<?php

use Source\Support\Seo;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.09 - Fornecedor de otimização");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ optimizer ] https://packagist.org/packages/coffeecode/optimizer
 */
fullStackPHPClassSession("optimizer", __LINE__);

$seo = new Seo();
$seo->render(
    'Formação Full Stack PHP Developer',
    'O Full Stack PHP Developer (FSPHP) é uma formação completa que especializa o aluno em todas as tecnologias necessárias tanto de front-end quanto de back-end para desenvolver projetos profissionais e de alto valor de mercado ao mesmo tempo que é a melhor, mais completa e moderna especialização PHP atualmente.',
    'https://upinside.com.br/fsphp',
    'https://upinside.com.br/fsphp/images/cover.jpg'
);

var_dump($seo->optimizer()->debug(), $seo->optimizer()->data());
