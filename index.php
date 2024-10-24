<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>HostCenter - Sua estadia Ideal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
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
        <h1>HostCenter</h1>
        <p>Sua estadia ideal</p>
    </section>
    <section id="secao2">
        <div class="imgSobre">
            <div class="sobre">
                <h1>Sobre:</h1>
                <p>Bem-vindo ao HostCenter, onde conforto e qualidade se encontram. Localizado no centro da cidade de Serra Serena, no bairro Vila Verde, oferecemos quartos bem decorados, serviços de alta qualidade, restaurante gourmet, academia e piscina. Seja para negócios ou lazer, o HostCenter é seu refúgio ideal.</p>
            </div>
        </div>
        <div id="recursos">
            <div class="recurso" id="primeiro">
                <i class="fa-solid fa-car"></i>
                <p>Estacionamento</p>
            </div>
            <div class="recurso" id="segundo">
                <i class="fa-solid fa-utensils"></i>
                <p>Restaurante</p>
            </div>
            <div class="recurso" id="terceiro">
                <i class="fa-solid fa-water-ladder"></i>
                <p>Piscinas</p>
            </div>
            <div class="recurso" id="quarto">
                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                <p>Playground</p>
            </div>
            <div class="recurso"  id="quinto">
                <i class="fa-solid fa-dumbbell"></i>
                <p>Academia</p>
            </div>
        </div>
    </section>
    <section id="secao3">
        <h2>GALERIA</h2>
        <div class="carossel">
            <div class="imgCarossel">
                <img class="galeriaImg" src="./img/galeria1.png">
                <img class="galeriaImg" src="./img/galeria2.png">
                <img class="galeriaImg" src="./img/galeria3.png">
                <img class="galeriaImg" src="./img/galeria4.png">
                <img class="galeriaImg" src="./img/galeria5.png">
                <img class="galeriaImg" src="./img/galeria6.png">
            </div>
            <button class="anterior" onclick="anterior()"><i class="fa-solid fa-angle-left"></i></button>
            <button class="proximo" onclick="proximo()"><i class="fa-solid fa-angle-right"></i></button>
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