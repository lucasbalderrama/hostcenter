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
    <title>HostCenter - Cadastrar</title>
    <link rel="shortcut icon" href="img/hostcenter-icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <header>
        <div id="container">
            <a href="index.html"><img class= "logo" src="./img/logo.png" alt="logo"></li></a>
            <nav>
                <ul id="nav1">
                    <li><h3><a href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
                    <li><h3><a href="./reservar.php">Reservar</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                    <li><h3><a id="login" href="./login.php">Entrar</a></h3></li>
                </ul>
                <input type="checkbox" id="checkbox">
                <label for="checkbox" id="botao">☰</label>
                <ul id="nav2">
                    <li><h3><a href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
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
                <h1>CADASTRAR</h1>
                <input class="inserir" type="text" name="nome" placeholder="Nome">

                <input class="inserir" type="email" name="email" placeholder="Email">

                <input class="inserir" type="password" name="senha" placeholder="Senha">
        
                <button id="entrar" type="submit">Cadastrar</button>
        
                <p class="outro">Já possui uma conta? <a href="./login.php">Entre!</a></p>
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