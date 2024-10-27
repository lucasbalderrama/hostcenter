<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/contato.css">
    <script src="js/contato.js" defer></script>
    <title>HostCenter - Sua estadia Ideal</title>
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
    <div id="centralizar">
        <div id="contato">
            <div class="caixinhaContato" id="insta">
                <i id="iconInsta" class="fa-brands fa-instagram"></i><br> 
                <h3>Instagram</h3>
                <a href="https://www.instagram.com/smartwebsn/">Acesse em:<br> @smartwebsn</a>
            </div>
            <div class="caixinhaContato" id="email">
                <i class="fa-regular fa-envelope"></i>
                <h3>Email</h3>
                <p>smartwebsn<br>@gmail.com</p>
            </div>
            <div class="caixinhaContato" id="equipe">
                <i class="fa-solid fa-users"></i>
                <h3>Equipe</h3>
                <p>Ana Lívia Lopes<br>Gabriel Reis<br>Isadora Gomes<br>Lucas Randal</p>
            </div>
            <div class="caixinhaContato" id="local">
                <i class="fa-solid fa-location-dot"></i>
                <h3>Localização</h3>
                <p>Hotel localizado em Serra Serena, no bairro Vila Verde, número 31.</p>
            </div>
            <form action="./index.html">
                <h2>Entre em contato conosco</h2>
                <div class="formulario">
                    <input type="text" id="username" placeholder="Digite seu nome" required>
                </div>
                <div class="formulario">
                    <input type="text" id="emailForm" placeholder="Digite seu email" required>
                </div>
                <div class="formulario">
                    <input type="text" id="observacao" placeholder="Digite sua pergunta ou observação">
                </div>
                <div class="formulario">
                    <button id="entrar"><a href="index.html">Entrar</a></button>  
                </div>
            </form>
        </div>
    </div>
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