<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>HostCenter - Sua estadia Ideal</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
</head>
<body>
<header id="header">
        <div id="container">
            <a href="index.php" id="box-img"><img class= "logo" src="./img/HC-logo.svg" alt="logo"></li></a>
            <nav>
                <ul id="nav1">
                    <li><h3><a id="inicio" href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
                    <li><h3><a href="./ocupacoes.php">Ocupações</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                </ul>
                <div id="user-div">
                <?php
                include 'conexao.php';
                session_start();
                
                if (isset($_SESSION['nome']) && $_SESSION['nome'] != '' && $_SESSION['tipo'] == 'Admin') {
                    echo "
                    <select id='user' onchange='redirecionar(this.value)'>
                        <option value='' id='opt-nome'>".$_SESSION['nome']."</option>
                        <option value='admin.php'>Admin</option>
                        <option value='logout.php'>Sair</option>
                    </select>";
                } elseif (isset($_SESSION['nome']) && $_SESSION['nome'] != '' && $_SESSION['tipo'] == 'Cliente') {
                    echo "
                    <select id='user' onchange='redirecionar(this.value)'>
                        <option value='' id='opt-nome'>".$_SESSION['nome']."</option>
                        <option value='logout.php'>Sair</option>
                    </select>";
                } else {
                    echo "<h3><a id='login' href='./login.php'>Entrar</a></h3>";
                }
                ?>

                <script>
                    function redirecionar(url) {
                        if (url) {
                            window.location.href = url;
                        }
                    }
                </script>
                </div>
                <input type="checkbox" id="checkbox">
                <label for="checkbox" id="botao">☰</label>
                <ul id="nav2">
                    <li><h3><a href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
                    <li><h3><a href="./ocupacoes.php">Ocupações</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                </ul>
            </nav>
        </div>
    </header>
<main class="main-content">
    <section id="secao1">
    <div class="logo-container">
        <h1 id="page-logo">HostCenter</h1> <br>
    </div> <br>
    <p>Sua estadia ideal</p>
</section>
<section id="secao2">
    <div class="imgSobre" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="sobre">
            <p>Bem-vindo a HostCenter, onde <strong>conforto</strong> e <strong>qualidade</strong> se encontram. Localizado no centro da cidade de Serra Serena, oferecemos serviços de alta qualidade com excelência.</p>
            <p>Seja para negócios ou lazer, o HostCenter é seu refúgio ideal.</p>
        </div>
    </div>
    <div id="recursos">
            <div class="recurso card" id="primeiro">
                <i class="fa-solid fa-car"></i>
                <div class="info">
                    <p>Estacionamento</p>
                </div>
            </div>
            <div class="recurso card" id="segundo">
                <i class="fa-solid fa-utensils"></i>
                <div class="info">
                    <p>Restaurante</p>
                </div>
            </div>
            <div class="recurso card" id="terceiro">
                <i class="fa-solid fa-water-ladder"></i>
                <div class="info">
                    <p>Piscinas</p>
                </div>
            </div>
            <div class="recurso card" id="quarto">
                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                <div class="info">
                    <p>Playground</p>
                </div>
            </div>
            <div class="recurso card"  id="quinto">
                <i class="fa-solid fa-dumbbell"></i>
                <div class="info">
                    <p>Academia</p>
                </div>
            </div>
        </div>
        
    </section>
    <section id="secao3">
        <h2>Descubra o que o nosso hotel tem a oferecer</h2>
        <div class="carossel">
            <div class="imgCarossel">
                <img class="galeriaImg" src="./img/galeria1.png">
                <img class="galeriaImg" src="./img/galeria2.jpg">
                <img class="galeriaImg" src="./img/galeria4.png">
                <img class="galeriaImg" src="./img/galeria6.jpg">
                <img class="galeriaImg" src="./img/galeria7.png">
                <img class="galeriaImg" src="./img/galeria8.jpg">
                <img class="galeriaImg" src="./img/galeria9.jpg">
                <img class="galeriaImg" src="./img/galeria10.jpg">
                <img class="galeriaImg" src="./img/galeria12.jpg">
            </div>
            <button class="anterior" onclick="anterior()"><i class='bx bx-chevron-left'></i></button>
            <button class="proximo" onclick="proximo()"><i class='bx bx-chevron-right'></i></button>
        </div>
    </section>
    <div class="politica">
        <h2>Políticas e hospedagem</h2>
        <ul>
            <li>Horário do check-in: a partir das 12h.</li>
            <li>Horário do check-out: a partir das 14h.</li>
            <li>Horário do café da manhã: das 07h às 10:30.</li>
            <li>Horário do jantar: das 19h às 22h.</li>
            <li>Planos de café da manhã e jantar disponíveis.</li>
            <li>Horário de serviço de quarto: até as 21h.</li>
            <li>Não é cobrado taxa de serviço.</li>
            <li>Aceitamos cartões de crédito, débito e pagamentos via Pix.</li>
            <li>O uso da piscina e da academia é permitido das 6h às 22h. Roupa adequada é obrigatória.</li>
            <li>Não é permitido a entrada de animais. Exceto para ocasiões de necessidade de cão guia.</li>
            <li>Conexão Wi-Fi gratuita disponível em todas as áreas do hotel.</li>
            <li>Objetos esquecidos serão armazenados por até 30 dias. Entre em contato para recuperar pertences.</li>
        </ul>
    </div>
    <footer>
            <div id="footer">
        
                <div class="contato">
                    <h2>Informações de Contato</h2>
                    <p><strong>SESI Caçapava:</strong></p>
                    <p>Endereço: Av. Monsenhor Theodomiro Lobo, 100, Caçapava - SP, 12285-050</p>
                    <p>Telefone: (12) 3653-1943</p>
                    <p>E-mail: contato@sesi-cacapava.com.br</p>
            
                    <p><strong>SENAI Taubaté:</strong></p>
                    <p>Endereço: Av. Independência, 846 - Independência, Taubaté - SP, 12031-001</p>
                    <p>Telefone: (12) 3609-5701</p>
                    <p>E-mail: senaitaubate@sp.senai.br</p>
                </div> 
            
                <div class="equipe">
                    <h2>Equipe Desenvolvedora</h2>
                    <ul>
                        <p>Ana Lívia dos Santos Lopes</p>
                        <li><a href="https://linktr.ee/analivialopess" target="_blank">Link para contato</a></li>
            
                        <p>Gabriel Reis de Brito</p>
                        <li><a href="https://linktr.ee/gabrielreiss" target="_blank">Link para contato</a></li>
            
                        <p>Isadora Gomes da Silva</p>
                        <li><a href="https://linktr.ee/isadoragomess" target="_blank">Link para contato</a></li>
            
                        <p>Lucas Randal Abreu Balderrama</p>
                        <li><a href="https://linktr.ee/lucasbalderrama" target="_blank">Link para contato</a></li>
                    </ul>
                </div>
            
                <div class="links-adicionais">
                    <h2>Links Adicionais</h2>
                    <ul>
                        <li><a href="termos.php" target="_blank">Termos de Uso</a></li>
                        <li><a href="privacidade.php" target="_blank">Política de Privacidade</a></li>
                    </ul>
                </div>
            </div>
        </footer> 
</main>
</body>
</html>