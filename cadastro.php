<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    $sql_insercao = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql_insercao);
    $stmt->bind_param("sss", $nome, $email, $senha_hashed);
        
    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar usuário: " . $conexao->error;
    }

    $stmt->close();
    $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
<form action="" method="POST">
        <h1>Cadastrar</h1>
            <label for="nome">Nome</label>
            <input class="inserir" type="text" name="nome">

            <label for="email">Email</label>
            <input class="inserir" type="email" name="email">

            <label for="senha">Senha</label>
            <input class="inserir" type="password" name="senha">

            <button id="entrar" type="submit">Cadastrar</button>

            <p>Já tem uma conta? <a href="./login.php">Entre!</a></p>
            <p><a href="./index.php">Voltar para o início</a></p>
        </form>
</body>
</html>