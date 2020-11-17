<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.06 - Desmistificando transações");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/*
 * [ transaction ] https://pt.wikipedia.org/wiki/Transa%C3%A7%C3%A3o_em_base_de_dados
 *
 * [ Atomicidade ] Resumo: Todas as ações que compõem a unidade de trabalho da transação
 * devem ser concluídas com sucesso, para que seja efetivada.
 *
 * [ Consistência ] Resumo: Todas as regras e restrições definidas no banco de dados devem
 * ser obedecidas. (relacionamentos, tipos, restrições, etc.)
 *
 * [ Isolamento ] Resumo: Cada transação funciona completamente à parte de outras estações e
 * todas as operações são parte de uma transação única.
 *
 * [ Durabilidade ] Resumo: Os efeitos de uma transação em caso de sucesso (commit) devem
 * persistir no banco de dados (Uma transação só tem sentido se houver gravação)
 */

fullStackPHPClassSession("transaction", __LINE__);

try {
    $pdo = Connect::getInstance();
    $pdo->beginTransaction(); // Nesse caso só será efetivado as querys quando rodar o commit();

    // Se eu declarar um $pdo2 = Connect::getInstance(); e abrir uma transaction
    // o $pdo->commit não executara nenhuma query do pdo2

    $pdo->query(
        "INSERT INTO users (first_name, last_name, email, document)
        VALUES('Armando', 'Del Col', 'armando@gmail.com', '12345687788');"
    );
    $userId = $pdo->lastInsertId();

    $pdo->query(
        "INSERT INTO users_address (user_id, street, number, complement)
        VALUES('{$userId}', 'Rua da Up', '3999', 'Sala 201');"
    );

    $pdo->commit();
    echo "<p class='trigger accept'>Cadastro com Sucesso</p>";
} catch (PDOException $exception) {
    $pdo->rollBack();
    var_dump($exception);
}
