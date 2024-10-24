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
                    <li><h3><a href="./index.html">início</a></h3></li>
                    <li><h3><a href="./servicos.html">Serviços</a></h3></li>
                    <li><h3><a href="./reservar.html">Reservar</a></h3></li>
                    <li><h3><a href="./contato.html">Contato</a></h3></li>
                    <li><h3><a href="./login.html">Entrar</a></h3></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="secao1">
        <div id="box-login">
            <div id="box-img-login">
                <img id="img-login" src="../hostcenter/img/hostcenter-login.jpeg" alt="">
            </div>
            <form action="index.html">
                <h1>LOGIN</h1>
                <input class="inserir" type="text" placeholder="Usuário" required>
                <input class="inserir" type="email" placeholder="Email" required>
                <input class="inserir" type="password" placeholder="Senha" required>
                <a href="../hostcenter/index.html"><input id="entrar" type="submit" value="Entrar"></a>
                <div id="div-termos">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <p id="termos">Receber emails</p>
                </div>
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