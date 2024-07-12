<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Exemplo</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="../controller/process.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>