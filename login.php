<?php

session_start();
include 'conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'";

    $result = mysqli_query($conexao, $query);

    if($result->num_rows > 0) {
        $usuario_logado = $result->fetch_assoc();
        $_SESSION['nome'] = $usuario_logado['nome_usuario'];
        
        header('Location: index.php');
    } else {
        echo "<p style='color:red;'>Email ou senha incorretos</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Entrar</title>
    <script src="./js/login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="container">
            <a href="index.html"><img class= "logo" src="./img/logo.png" alt="logo"></li></a>
            <nav>
                <ul id="nav1">
                    <li><h3><a href="./index.html">início</a></h3></li>
                    <li><h3><a href="./servicos.html">Serviços</a></h3></li>
                    <li><h3><a href="./reservar.html">Reservar</a></h3></li>
                    <li><h3><a href="./contato.html">Contato</a></h3></li>
                    <li><h3><a id="login" href="./login.html">Entrar</a></h3></li>
                </ul>
                <input type="checkbox" id="checkbox">
                <label for="checkbox" id="botao">☰</label>
                <ul id="nav2">
                    <li><h3><a href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.html">Serviços</a></h3></li>
                    <li><h3><a href="./reservar.php">Reservar</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                    <li><h3><a href="./login.php">Entrar</a></h3></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="secao1">
        <div id="box-login">
            <div id="box-img-login">
                <img id="img-login" src="../hostcenter/img/hostcenter-login.jpeg" alt="">
            </div>
            <form action="" method="POST">
                <h1>LOGIN</h1>
                <input class="inserir" name="email" type="email" placeholder="Email" required>
                <input class="inserir" name="senha" type="password" placeholder="Senha" required>
                <a href="../hostcenter/index.html"><input id="entrar" type="submit" value="Entrar"></a>
                <p>Não possui uma conta? <a href="cadastro.php">Cadastre-se!</a></p>
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