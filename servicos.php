<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/servicos.css">
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

    <section>
        <div class="container2">
            <div class="text-section">
                <h1>Experiências que <span class="highlight">elevam</span> sua estadia</h1>
                <p>Descubra o conforto e a hospitalidade que transformam sua estadia em uma experiência inesquecível.</p>
            </div>
            <div class="image-section">
                <img src="./img/fam_hotel.png" alt="Família aproveitando estadia no hotel">
            </div>
        </div>
    </section>
    <section>
        <div class="container_servicos">

            <h2>Confira nossos serviços</h2>
            <h3></h3>
        </div>
    </section>










        <div class="geral">
            <div class="caixa" id="comida">
                <img class="img esquerda" src="./img/comida.png" alt="">
                <div class="fundo-texto">
                    <h2>Gastronomia</h2>
                    <p>O hotel oferece uma experiência  gastronômica excepcional. O menu é cuidadosamente elaborado para atender a todos os paladares, incluindo opções vegetarianas, veganas e pratos personalizados sob demanda.</p>
                    <p>A cada refeição, o hotel se compromete a proporcionar uma experiência culinária memorável, que combina sabor, criatividade e hospitalidade de excelência.</p>
                </div>
            </div>    

            <div class="caixa">
                <div class="fundo-texto" id="lazer">
                    <h2>Lazer</h2>
                    <p>As opções de lazer são variadas e garantem diversão para todas as idades. A <strong>piscina</strong>  oferece um espaço relaxante para nadar e se refrescar, enquanto a <strong>academia</strong> está equipada com aparelhos adequados para quem deseja manter a rotina de exercícios durante a estadia.</p>
                    <p>Além disso, o hotel conta com um <strong>playground</strong> seguro e divertido, ideal para as crianças se divertirem. Proporcionando entretenimento e bem-estar para toda a família.</p>
                </div>
                <img class="img direita" src="./img/parque.png" alt="">
            </div>

            <div class="caixa" id="estacionamento">
                <img class="img esquerda" src="./img/estacionamento.png" alt="">
                <div class="fundo-texto">
                    <h2>Estacionamento</h2>
                    <p>O hotel dispõe de um estacionamento espaçoso e bem sinalizado, garantindo conforto e segurança para os hóspedes que chegam de carro.</p>
                    <p>As vagas são de fácil acesso, e o serviço é monitorado para assegurar a tranquilidade dos veículos estacionados.</p>
                </div>
            </div>

            <div class="caixa">
                <div class="fundo-texto" id="limpeza">
                    <h2>Limpeza</h2>
                    <p>A equipe de limpeza é dedicada a manter todos os ambientes impecáveis, assegurando uma estadia <strong>confortável</strong> e <strong>agradável</strong>. Os serviços incluem limpeza diária dos quartos, troca de roupas de cama e toalhas, e reabastecimento de itens de higiene.</p>
                    <p>As áreas comuns, como lobby e espaços de lazer, também são higienizadas regularmente. Além disso, a equipe está sempre disponível para atender, garantindo um ambiente limpo e seguro.</p>
                </div>
                <img class="img direita" src="./img/limpeza.png" alt="">
            </div>
        </div>
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