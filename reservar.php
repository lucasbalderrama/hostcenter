<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reservar.css">
    <title>Reserve seu quarto</title>
</head>
<body>
<header>
        <div id="container">
            <a href="index.php" id="box-img"><img class= "logo" src="./img/HC-logo.svg" alt="logo"></li></a>
            <nav>
                <ul id="nav1">
                    <li><h3><a id="inicio" href="./index.php">início</a></h3></li>
                    <li><h3><a href="./servicos.php">Serviços</a></h3></li>
                    <li><h3><a href="./ocupacoes.php">Reservar</a></h3></li>
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
                
            </nav>
        </div>
    </header>

    <?php
    // Inclui a configuração do banco
    include 'conexao.php';

    // Verifica se o botão de submit foi clicado
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Recebe os dados do formulário
        $nome_usuario = $_POST['nome-usuario'];
        $sobrenome_usuario = $_POST['sobrenome-usuario'];
        $email_usuario = $_POST['email-usuario'];
        $telefone_usuario = $_POST['telefone-usuario'];
        $tp_quarto = $_POST['troom'];
        $plano_refeicao = $_POST['meal'];
        $entrada = $_POST['entrada-reserva'];
        $saida = $_POST['saida-reserva'];
        
        // Insere os dados na tabela
        $sql = "INSERT INTO reservas (nome_usuario, sobrenome_usuario, email_usuario, telefone_usuario, tp_quarto, plano_refeicao, entrada, saida)
                VALUES ()";
        $stmt = $conexao->prepare($sql);
        
        // Executa e verifica a inserção
        if ($stmt->execute()) {
            echo "Erro ao fazer reserva.";

            echo '<script>Swal.fire({text: "Reserva efetuada com sucesso!",icon: "success"});</script>';
        }
    }
    ?>

    <div class="container">
        <div class="area-reserva">
            <div class="bloco-reserva">
                <h2>Insira seus dados:</h2>
                    <form name="form" method="post">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" name="nome-usuario" required>
                        </div>
                        <div class="form-group">
                            <label>Sobrenome:</label>
                            <input type="text" name="sobrenome-usuario" required>
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="text" name="email-usuario" type="email" required>
                        </div>
                                           
                        <div class="form-group">
                            <label>Telefone:</label>
                            <input type="text" name="telefone-usuario" type ="text" required>
                    </div>
            </div>

            <div class="bloco-reserva">
                <h2>Pagamento:</h2>
                <form action="" method="POST">
                    <input class="inserir" name="email" type="email" placeholder="Email" required>
                    <input class="inserir" name="senha" type="password" placeholder="Senha" required>
                    <div id="forma-pagamento">
                        <p>Forma de pagamento</p>
                        <div class="checkbox-wrapper-29">
                            <label class="checkbox">
                                <input type="checkbox" class="checkbox__input" name="forma_pagamento" />  
                                <span class="checkbox__label"></span>
                                Débito
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" class="checkbox__input" name="forma_pagamento" />  
                                <span class="checkbox__label"></span>
                                Crédito
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" class="checkbox__input" name="forma_pagamento" />  
                                <span class="checkbox__label"></span>
                                Pix
                            </label>
                        </div>
                    </div>
                    <p class="outro">Não possui uma conta? <a href="cadastro.php">Cadastre-se!</a></p>
                </form>
                <input type="submit" value="Reservar" name="submit" id="btn-reserva">
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.checkbox__input').forEach((checkbox) => {
            checkbox.addEventListener('change', function() {
                document.querySelectorAll('.checkbox__input').forEach((cb) => {
                    if (cb !== this) cb.checked = false;
                });
            });
        });
    </script>
</body>
</html>