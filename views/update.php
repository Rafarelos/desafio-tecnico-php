<?php

require_once '../connection.php';

$connection = new Connection();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$users = $connection->query("SELECT * FROM users WHERE id = $id");
$editUser = $users->fetch(PDO::FETCH_ASSOC);

if (!$editUser) {
    echo "Usuário não encontrado!";
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form action="../controller/process_update.php" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($editUser['id'], ENT_QUOTES, 'UTF-8') ?>">
        
        <label for="nome">Nome:</label>
        <input value="<?= htmlspecialchars($editUser['name'], ENT_QUOTES, 'UTF-8') ?>" type="text" id="nome" name="nome" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input value="<?= htmlspecialchars($editUser['email'], ENT_QUOTES, 'UTF-8') ?>" type="email" id="email" name="email" required>
        <br><br>
        
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
