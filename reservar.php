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
        $sql = "INSERT INTO roombook (nome_usuario, sobrenome_usuario, email_usuario, telefone_usuario, tp_quarto, plano_refeicao, entrada, saida)
                VALUES (:nome_usuario, :sobrenome_usuario, :email_usuario, :telefone_usuario, :tp_quarto, :plano_refeicao, :entrada, :saida)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':nome_usuario', $nome_usuario);
        $stmt->bindParam(':sobrenome_usuario', $sobrenome_usuario);
        $stmt->bindParam(':email_usuario', $email_usuario);
        $stmt->bindParam(':telefone_usuario', $telefone_usuario);
        $stmt->bindParam(':tp_quarto', $tp_quarto);
        $stmt->bindParam(':plano_refeicao', $plano_refeicao);
        $stmt->bindParam(':entrada', $entrada);
        $stmt->bindParam(':saida', $saida);
        
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
                <div class="cab-reserva">
                    <h2>Opções de reserva:</h2>
                </div>
                <div class="body-reserva">
                    <div class="form-group">
                        <label>Tipo de quarto:</label>
                        <select name="troom" required>
                            <option value selected ></option>
                            <option name="quarto-c">Quarto Casal</option>
                            <option name="quarto-f">Quarto Familia</option>
                            <option name="quarto-a">Quarto Amigos</option>
                        </select>
                    </div>
                     
                    <div class="form-group">
                        <label>Pacotes Refeição</label>
                        <select name="meal"required>
                            <option value selected ></option>
                            <option name="pacote-cm">Pacote Café da Manhã</option>
                            <option name="pacote-ad">Pacote adicional</option>
                            <option name="pacote-co">Pacote Completo</option>
                            <option name="nen-pacote">Nenhum pacote</option>
                        </select>
                    </div>
        
                    <div class="form-group">
                        <label>Entrada:</label>
                        <input name="entrada-reserva" type ="date">
                    </div>
        
                    <div class="form-group">
                        <label>Saída:</label>
                        <input name="saida-reserva" type ="date">
                    </div>
                    <input type="submit" value="Reservar" name="submit" id="btn-reserva">
                    </form>
            </div>
        </div>
    </div>
</body>
</html>