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
                                    <h3><span>R$</span>320</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Colocar detalhes.</p>
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
                                    <h3><span>R$</span>220</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Colocar detalhes.</p>
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
                                    <h3><span>R$</span>180</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Colocar detalhes.</p>
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
                                    <h3><span>R$</span>320</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Colocar detalhes.</p>
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
                                    <h3><span>R$</span>220</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Colocar detalhes.</p>
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
                                    <h3><span>R$</span>180</h3>
                                    <button onclick="toggleCard(this)">Saiba Mais</button>
                                        <div class="card" id="infoCard">
                                            <p>Colocar detalhes.</p>
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