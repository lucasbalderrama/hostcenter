<?php
session_start()
?>
<!DOCTYPE php>
<php lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js//ocupacoes.js"></script>
    <link rel="stylesheet" href="./css/ocupacoes.css">
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
                    <li><h3><a href="./ocupacoes.php">Ocupações</a></h3></li>
                    <li><h3><a href="./contato.php">Contato</a></h3></li>
                </ul>
                <div id="user-div">
                <?php
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

    <section id="secao1">
        <div class="seção-plano" id="quartos">
            <div class="container">
                <h3 class="titulo-w3-agileits titulo-preto-wthree">Conheça nossas ocupações</h3>
                <div class="tabela-preco-principal">
                    <div class="coluna card-preco">
                        <div class="bloco-preco agile">
                            <div class="topo-preco">
                                <img src="img/qamigos.jpg" alt=" " class="img-responsiva" />
                                <h4>Quarto Amigos</h4>
                            </div>
                            <div class="fundo-preco">
                                <div class="seleção-preco">
                                    <h3><span>R$</span>200</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Descontraído e funcional, o Quarto Amigos é ideal para grupos que viajam juntos e buscam conforto e praticidade. Equipado com duas ou três camas de solteiro, possui uma decoração moderna, Wi-Fi gratuito, TV a cabo e um banheiro privativo espaçoso. O ambiente perfeito para relaxar após um dia de aventuras.</p>
                                            <br>
                                            <p id='p-dia'>R$200,00 por dia</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="coluna card-preco">
                        <div class="bloco-preco agile">
                            <div class="topo-preco">
                                <img src="img/qcasal.jpg" alt=" " class="img-responsiva" />
                                <h4>Quarto Casal</h4>
                            </div>
                            <div class="fundo-preco">
                                <div class="seleção-preco">
                                    <h3><span>R$</span>250</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Romântico e aconchegante, o Quarto Casal foi pensado para casais que desejam momentos especiais. Com uma cama queen-size, iluminação suave, varanda com vista (dependendo da disponibilidade), ar-condicionado, TV a cabo, Wi-Fi gratuito e banheiro privativo com amenities exclusivos, é o refúgio ideal para relaxar e criar memórias inesquecíveis.</p>
                                            <br>
                                            <p id='p-dia'>R$250,00 por dia</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="coluna card-preco">
                        <div class="bloco-preco agile">
                            <div class="topo-preco">
                                <img src="img/qfamilia.jpg" alt=" " class="img-responsiva" />
                                <h4>Quarto Família</h4>
                            </div>
                            <div class="fundo-preco">
                                <div class="seleção-preco">
                                    <h3><span>R$</span>300 </h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Espaçoso e confortável, o Quarto Família é perfeito para quem viaja com crianças ou em grupo. Com uma cama de casal e duas camas de solteiro (ou beliche), além de espaço extra para acomodar até 4 pessoas. Inclui Wi-Fi gratuito, TV a cabo, frigobar, ar-condicionado e banheiro privativo. Este quarto garante conforto e praticidade para toda a família.</p>
                                            <br>
                                            <p id='p-dia'>R$300,00 por dia</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <a id="reservar-button"  href="./reservar.php">Reserve seu quarto!</a>

    <section>
        <div class="seção-plano" id="quartos">
            <div class="container">
                <h3 class="titulo-w3-agileits titulo-preto-wthree">Plano Refeição</h3>
                <div class="tabela-preco-principal">
                    <div class="coluna card-preco">
                        <div class="bloco-preco agile">
                            <div class="topo-preco2">
                                <img src="img//cafe-da-manha.jpg" alt=" " class="img-responsiva" />
                                <h4>Pacote Café da Manhã</h4>
                            </div>
                            <div class="fundo-preco">
                                <div class="seleção-preco">
                                    <h3><span>R$</span>40</h3>                                    
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Perfeito para quem deseja começar o dia com energia e sabor! Este pacote inclui um café da manhã completo, com uma seleção variada de pães, bolos, frutas frescas, sucos naturais, pratos quentes e bebidas como café, chá e chocolate quente. Tudo preparado com ingredientes frescos para uma experiência matinal deliciosa.</p>
                                            <br>
                                            <p id='p-dia'>R$40,00 por dia</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="coluna card-preco">
                        <div class="bloco-preco agile">
                            <div class="topo-preco2">
                                <img src="img/almoco.jpg" alt=" " class="img-responsiva">
                                <h4>Pacote Café da Manhã e Jantar</h4>
                            </div>
                            <div class="fundo-preco">
                                <div class="seleção-preco">
                                    <h3><span>R$</span>80</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Ideal para quem busca conforto e praticidade. Este pacote inclui nosso café da manhã completo, além de um jantar delicioso com pratos da culinária local e internacional. O jantar é composto por entrada, prato principal e sobremesa, com opções que agradam a todos os gostos. Perfeito para quem quer explorar durante o dia e voltar para uma refeição reconfortante no hotel.</p>
                                            <br>
                                            <p id='p-dia'>R$80,00 por dia</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="coluna card-preco">
                        <div class="bloco-preco agile">
                            <div class="topo-preco2">
                                <img src="img/pcompleto" alt=" " class="img-responsiva">
                                <h4>Pacote Completo</h4>
                            </div>
                            <div class="fundo-preco">
                                <div class="seleção-preco">
                                    <h3><span>R$</span>120</h3>  
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Uma experiência gastronômica completa! Este pacote inclui café da manhã, almoço e jantar, com menus cuidadosamente elaborados para cada refeição. Desfrute de uma ampla variedade de pratos frescos e saborosos, incluindo opções vegetarianas e infantis. Com este pacote, você pode relaxar e aproveitar sua estadia sem se preocupar com nada além de saborear as melhores refeições.</p>
                                            <br>
                                            <p id='p-dia'>R$120,00 por dia</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <section>

    </section>

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
</body>
</php>

<script>
    function toggleCard(button) {
        const card = button.nextElementSibling; 
        if (card.style.display === 'none' || card.style.display === '') {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    }
</script>