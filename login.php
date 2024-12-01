<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM usuarios WHERE email_usuario = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario_logado = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario_logado['senha_usuario'])) {
            $_SESSION['id_usuario'] = $usuario_logado['id_usuario'];
            $_SESSION['nome'] = $usuario_logado['nome_usuario'];

            // Redireciona para a página anterior, se existir, ou para o index
            $url_anterior = isset($_SESSION['url_anterior']) ? $_SESSION['url_anterior'] : 'index.php';
            unset($_SESSION['url_anterior']); // Remove a URL da sessão
            
            header("Location: $url_anterior");
            exit;
        } else {
            echo "<p style='color:red;'>Senha incorreta</p>";
        }
    } else {
        echo "<p style='color:red;'>Usuário não consta no sistema!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <title>HostCenter - Entrar</title>
    <link rel="shortcut icon" href="img/hostcenter-icon.png" type="image/x-icon">
    <script src="./js/login.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <section id="secao-login">
        <div id="box-login">
            <form action="../hostcenter/index.html" method="POST">
                <h1>Entre na sua conta</h1> 
                <label for="email">Email</label>
                <input class="inserir" name="email" type="email" required>
                <label for="senha">Senha</label>
                <input class="inserir" id="senha-campo" name="senha" type="password" required>
                <div id='mostrar'>
                        <input type='checkbox' onclick='mostrarSenha()'> Mostrar senha
                </div> 
                <input id="entrar" type="submit" value="Entrar">
                <p class="celular">Não possui uma conta? <a href="cadastro.php">Cadastre-se!</a></p>
            </form>
        </div>
    </section>
    <script>
    function mostrarSenha() {
        var x = document.getElementById("senha-campo");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>
</html>