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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>

    <section id="secao1">
        <div id="box-login">
            <div id="box-img-login">
                <img id="img-login" src="../hostcenter/img/hostcenter-login.jpeg" alt="">
            </div>
            <form action="" method="POST">
                <h1>ENTRAR</h1>
                <h2>Que bom te ver denovo!</h2>
                <input class="inserir" name="email" type="email" placeholder="Email" required>
                <input class="inserir" name="senha" type="password" placeholder="Senha" required>
                <a href="../hostcenter/index.html"><input id="entrar" type="submit" value="Entrar"></a>
                <p class="outro">Não possui uma conta? <a href="cadastro.php">Cadastre-se!</a></p>
            </form>
        </div>
    </section>
    <footer>
        <div class="flex">
            <i id="hotel" class="fa-solid fa-hotel"></i>
            <p>HostCenter</p> 
        </div>
        <div class="flex">
            <i class="fa-brands fa-instagram"></i>
            <a href="#">smartwebsn</a>
        </div>
    </footer>
</body>
</html>