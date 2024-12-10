<?php
include 'conexao.php';
session_start();
if (!isset($_SESSION['id_usuario'])) {
    $_SESSION['url_anterior'] = $_SERVER['REQUEST_URI']; 
    header("Location: login.php"); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reservar.css">
    <script src="./js/reservar.js" defer></script>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Reserve seu quarto</title>
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

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    if (!isset($_SESSION['id_usuario'])) {
        echo "<script>alert('Você precisa estar logado para fazer uma reserva!');'</script>";
        $_SESSION['url_anterior'] = $_SERVER['REQUEST_URI'];
        echo"<script>window.location.href = './login.php';</script>";
        exit;
    }

    $id_usuario = $_SESSION['id_usuario'];
    $tp_quarto = $_POST['tpquarto'];
    $plano_refeicao = $_POST['prefei'];
    $entrada = $_POST['entrada-reserva'];
    $saida = $_POST['saida-reserva'];
    $forma_pagamento = $_POST['forma_pagamento'];
    $valor_total = $_POST['valor_total'];

    $stmt = $conexao->prepare("INSERT INTO reservas (tp_quarto, plano_refeicao, entrada, saida, forma_pagamento, id_usuario, valor_total) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssid", $tp_quarto, $plano_refeicao, $entrada, $saida, $forma_pagamento, $id_usuario, $valor_total);

    if ($stmt->execute()) {
        echo '<script>
                Swal.fire({
                    text: "Reserva efetuada com sucesso!",
                    icon: "success"
                });
              </script>';
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }
    $conexao->close();
}
?>
    <div class="container">
        <div class="area-reserva">
            <div class="bloco-reserva">
                <h2 id='h2-titulo'>Insira seus dados:</h2>
                <form name="form" method="post">
                    <div class="form-group">
                        <label>Tipo de quarto:</label>
                        <select name="tpquarto" id="quarto" required>
                            <option class="esconder" value="" data-preco="0" selected>Selecione o tipo de quarto</option>
                            <option value="Quarto Amigos" data-preco="250.0">Quarto Amigos</option>
                            <option value="Quarto Casal" data-preco="200.0">Quarto Casal</option>
                            <option value="Quarto Família" data-preco="300.0">Quarto Família</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pacotes Refeição:</label>
                        <select name="prefei" id="refeicao" required>
                            <option class="esconder" value="" data-preco="0" selected>Selecione o pacote</option>
                            <option value="Pacote Café da Manhã" data-preco="40.0">Pacote Café da Manhã</option>
                            <option value="Pacote Café da Manhã e Jantar" data-preco="80.0">Pacote Café da Manhã e Jantar</option>
                            <option value="Pacote Completo" data-preco="120.29">Pacote Completo</option>
                            <option value="Nenhum Pacote" data-preco="0">Nenhum Pacote</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Entrada:</label>
                        <input name="entrada-reserva" type="date" required>
                    </div>
                    <div class="form-group">
                        <label>Saída:</label>
                        <input name="saida-reserva" type="date" required>
                    </div>
            </div>
            <div class="bloco-reserva">
                <div id="forma-pagamento">
                    <h2 id='h2-titulo'>Forma de pagamento</h2>
                    <div class="checkbox-wrapper-29">
                        <label class="checkbox">
                            <input type="radio" name="forma_pagamento" value="Débito">
                            Débito 
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO2YOw7CMBBEfZBQIo7AEVJyBYRX4mwgPgXewH2oQWDJqzTIyNDGSZk1zJOmn/HuuhhjAAAAgF9ieZGJdbIjDp5Yog4FT06Oq3M7GzRPTm7jG5ZOWZZ78pgN8H358Y1Sv7bZALrWRrrlwrMngAKDPKxsgHm9iCXIIECNCUSsUBfFHzGV/o3SrwS4+pdKEQJ4TCBihfgffiFSLoMAjAlErFAXY68G4YhZf61inTxMDstyUB+AwyYbIHWPmqtFSt6aUGUDfA65CVWq71IDpsd4SF7261M77TUPAAAAmMJ4A08/Ru4Fa1HyAAAAAElFTkSuQmCC" alt="bank-card-back-side">
                        </label>
                        <label class="checkbox">
                            <input type="radio" name="forma_pagamento" value="Crédito">
                            Crédito
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA20lEQVR4nO2YMQ7CMBAE/Qw7DiXiCTwhJf9EUd4Asov8gzoSSetDh5w6h+lsJzvS9ru+PRenFAAAALAn+NmcyJk+OLOQN1yCwupFD+ybS9J8cHrKbZjEIHri0bZigPjyuU1SWncxQEm1IblOszyBAgzSHxIDXLsb1yCFAB0mwKjQFtUvMdX+jdJeAryWT5EiBFgwAUaF/BF+ISpcCgE8JsCo0Ba5q0GHX+JQx1nl/aNCeshtkFJyphcDxNtj8afFhz2LAdYQo23j+S5ewAqqzRxfPmkeAAAAUJXxBf4rm0NPCe+mAAAAAElFTkSuQmCC" alt="bank-card-back-side">
                        </label>
                        <label class="checkbox">
                            <input type="radio" name="forma_pagamento" value="Pix" />  
                            Pix
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC9UlEQVR4nO1a3U7UUBDuCxj1Wi/0SgT8SdRLRe+UznS98THUB1B8E2OC8aYzFRI6pxjfQMEb9RFQWQUimiiRRDP7RwMtS09PS9cwyUnIbpnzfbNz5sw3u553ZP+Z+fGLk2D4CQoto/BPEP6BhpdQaKY1N3fCa7L5Cd1Ew1/R8N/MJdzWZ7wmGgjdQaHfueB7CwxvYUwtbxTBYxNJQEHwjSIBluDTJED47kiCP1QS4Ag8HgYJ1+CxThJVgcc6SQTz88eCmG+A8FMwvF0auNAf9eUndF19e7XfvMJr9uB5DUw4VSnIIImCTs3e2XgdDc3eNtFpfX86Di/v2z7kpgttBEJX1Yf6AuHnXd876aR7uwa/A0BoBRZ5TJ/zF6NLBUms98HDIo+B0Ke8M2FN4iAHFoRWMaGJgiTW/Ti80g1QeE4D4fzGLlJtlIS/EE3q/6Ghi0NIFAKPNiRsSmWaxHT88jwa/pxxYNtKMAU+M21KkdCqkpfzBziUXwITjmeSEG63JLzQAW/CcX3Wbg/eytUTqqRsqsluEoMzsRBNoqH3ugYpltCELXhMByNL2XVkYBnHGSTS5gS86e0R8+OM3Od3Lpz3SGwGwg/xVXhWl/6tr7nyj4aX9hBQAe5wg0oXGNrMSCGnEap2CX/P+ARo2WWE0ET3W8ncGU0hSOiBywCB4bdZBGZG5hAbfrSHgJam7mXjBryWThD+CMIfXJZREFq99zo8vodA1RfZ4BYueZHBsPa720rwr6JR6Ud+n37Iqg9C+37oYCQKdqTVN3OF2ul0zhdop/taIKiqnS4qaCxU2W5Bs5IH3r0q62hgmvUXwlN98CD0zeLQb4CJrvUlpfpM62sn4IeSi/lWWVHv1z1u1xqspQyEnrkYq4Dh7a6vcCq3vo/SYAurnlhXOVrEusbtVQx3se7vClyO1/GwvuiwaTsaA74siUaAtyXRKPBFSTQS/K5xe3u/zrXycXpZU2WncxvVrfozg85PDYTeqAys/KY9Mq9++wfSId/ImvikTwAAAABJRU5ErkJggg==" alt="pix" >
                        </label>
                    </div>
                    <input type="hidden" name="valor_total" id="input-total-reserva" value="0">
                    <p id="total-reserva" style="font-size: 18px;margin-top:60px">Total: R$ 0,00</p>

                    <input type="submit" value="Reservar" name="submit" id="btn-reserva">
                </div>
            </div>
                </form>
        </div>
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
</body>
</html>