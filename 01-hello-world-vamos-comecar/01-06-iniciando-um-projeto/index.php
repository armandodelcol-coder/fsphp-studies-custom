<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciando um Projeto</title>

    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php
    $firstMessage = "Essa é uma mensagem que veio de uma variável PHP.";
    ?>
    <h1>Primeiro Projeto PHP</h1>
    <p class="message"><?= $firstMessage; ?></p>
    <p id="warning-message">Loading...</p>

    <script src="../assets/scripts.js"></script>
</body>

</html>