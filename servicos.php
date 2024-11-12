<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/servicos.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
    <title>HostCenter - Servicos</title>
    <script src="./js/servicos.js"></script>
</head>
<body>
    <header>
        <div id="container">
            <a href="index.php"><img class= "logo" src="./img/logo.png" alt="logo"></li></a>
            <nav>
                <ul id="nav1">
                    <li><h3><a href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
                    <li><h3><a href="./reservar.php">Reservar</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                    <?php
                    session_start();

                    if ($_SESSION['nome'] != ''){
                        echo "<li><h3><a id='sair' href='./logout.php'>Sair</a></h3></li>";
                    } elseif ($_SESSION['nome'] == '') {
                        echo "<li><h3><a id='login' href='./login.php'>Entrar</a></h3></li>";
                    }
                    ?>
                </ul>
                <input type="checkbox" id="checkbox">
                <label for="checkbox" id="botao">☰</label>
                <ul id="nav2">
                    <li><h3><a href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
                    <li><h3><a href="./reservar.php">Reservar</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                    <?php
                    if ($_SESSION['nome'] != ''){
                        echo "<li><h3><a href='./logout.php'>Sair</a></h3></li>";
                    } elseif ($_SESSION['nome'] == '') {
                        echo "<li><h3><a href='./login.php'>Entrar</a></h3></li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <div class="container2">
            <div class="text-section">
                <h1>Experiências que <span class="fundo-h1">elevam</span> sua estadia</h1>
                <p>Descubra o conforto e a hospitalidade que transformam sua estadia em uma experiência inesquecível</p>
            </div>
            <div class="image-section">
                <img src="./img/fam_hotel.png" alt="Família aproveitando estadia no hotel">
            </div>
        </div>
    </section>
    <section>
        <div class="container_servicos">
            <div class="intro">
                <h1>Confira nossos serviços</h1>
                <p class="intro-p">
                    Nosso hotel tem o compromisso de proporcionar uma estadia que vá além das expectativas, oferecendo serviços cuidadosamente pensados para o seu conforto e bem-estar. Com foco em excelência, disponibilizamos gastronomia de alta qualidade, opções de lazer para todas as idades, estacionamento seguro e um serviço de limpeza que garante um ambiente sempre impecável.
                </p>
                <div class="image">
                <img src="./img/mala.jpg" alt="Imagem dos serviços do hotel">
                </div>
            </div>
            
            <div class="services">
                <div class="service-item" id="comida">
                    <div class="icon"><img src="./img/talher.png" alt=""></div>
                    <h2>Gastronomia</h2>
                    <p>O hotel oferece uma experiência gastronômica excepcional, com um menu variado que inclui opções vegetarianas, veganas e pratos personalizados, atendendo a todos os paladares.</p>
                </div>

                <div class="service-item" id="lazer">
                    <div class="icon"><img src="./img/playground.png" alt=""></div>
                    <h2>Lazer</h2>
                    <p>O hotel proporciona diversas opções de lazer, como piscina relaxante, academia equipada e um playground seguro, garantindo diversão e bem-estar para toda a família.</p>
                </div>

                <div class="service-item service2" id="estacionamento">
                    <div class="icon"><img src="./img/carro.png" alt=""></div>
                    <h2>Estacionamento</h2>
                    <p>O estacionamento do hotel é amplo, bem sinalizado e monitorado, oferecendo segurança e praticidade para os hóspedes que chegam de carro.</p>
                </div>

                <div class="service-item service2" id="limpeza">
                    <div class="icon"><img src="./img/vassoura.png" alt=""></div>
                    <h2>Limpeza</h2>
                    <p>A equipe de limpeza mantém o hotel impecável, com serviços diários de higienização dos quartos e áreas comuns, assegurando uma estadia confortável e segura.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="flex">
            <i id="hotel" class="fa-solid fa-hotel"></i>
            <p>HostCenter</p> 
        </div>
        <div class="flex">
            <i class="fa-brands fa-instagram"></i>
            <a href="https://www.instagram.com/smartwebsn/">smartwebsn</a>
        </div>
    </footer>
</body>
</html>