<!DOCTYPE php>
<php lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/reservar.js"></script>
    <link rel="stylesheet" href="./css/ocupacoes.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
    <title>Veja nossas ocupações</title>
</head>
<body>
<header>
        <div id="container">
            <a href="index.php" id="box-img"><img class= "logo" src="./img/HC-logo.svg" alt="logo"></li></a>
            <nav>
                <ul id="nav1">
                    <li><h3><a id="inicio" href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
                    <li><h3><a href="./reservar.php">Reservar</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                </ul>
                <div id="user-div">
                    <?php
                    session_start();
                    if (isset($_SESSION['nome']) && $_SESSION['nome'] != ''){
                        echo "<select name='' id='user' onchange='sair()'>
                                <option value='' id='opt-nome'>".$_SESSION['nome']."</option>
                                <a><option value='' id='opt-sair'>Sair</option></a>
                            </select>";
                    } elseif (isset($_SESSION['nome']) && $_SESSION['nome'] == '') {
                        echo "<h3><a id='login' href='./login.php'>Entrar</a></h3>";
                    }
                    ?>
                    <script>
                        function sair(){
                            window.location.href = "./logout.php";
                        }
                    </script>
                </div>
                <input type="checkbox" id="checkbox">
                <label for="checkbox" id="botao">☰</label>
                <ul id="nav2">
                    <li><h3><a href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
                    <li><h3><a href="./reservar.php">Reservar</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="secao1">
        <h1>Conheça nossas ocupações</h1>

        <div id="quartos">
            <img class="quartos-img" src="img/qcasal.jpg" alt="">
            <div class="bloco">
                <h2>Quarto Casal</h2>
                <p>Quarto aconchegante com uma cama de casal, decoração elegante, Wi-Fi gratuito, TV de tela plana e ar-condicionado. Perfeito para casais que buscam conforto e tranquilidade</p>
                <a href="reservar.php"><button>Reservar Agora</button></a>
            </div>

            <img class="quartos-img" src="img/qamigos.jpg" alt="">
            <div class="bloco">
                <h2>Quarto Amigos</h2>
                <p>O Quarto para Amigos dispõe de quatro camas de solteiro. Decorado com um toque moderno, oferece Wi-Fi gratuito, TV de tela plana e frigobar, garantindo uma estadia agradável para amigos que viajam juntos.</p>
                <a href="reservar.php"><button>Reservar Agora</button></a>
            </div>

            <img class="quartos-img" src="img/qfamilia.jpg" alt="">
            <div class="bloco">
                <h2>Quarto Familia</h2>
                    <p>Amplo quarto com duas camas, design moderno e funcional. Comodidades como Wi-Fi gratuito, TV de tela plana e mini-bar, ideal para famílias ou grupos de amigos menores.</p>
                    <a href="reservar.php"><button>Reservar Agora</button></a>
            </div>
        </div>
    </section>

    <footer>
        <div class="flex" id="footerHostCenter">
            <i id="hotel" class="fa-solid fa-hotel"></i>
            <p>HostCenter</p> 
        </div>
        <div class="flex">
            <i class="fa-brands fa-instagram"></i>
            <a href="https://www.instagram.com/smartwebsn/">smartwebsn</a>
        </div>
    </footer>
</body>
</php>