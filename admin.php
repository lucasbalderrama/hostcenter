<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Inicia a sessão para verificar se o usuário é um administrador
session_start();

// Verifica se o usuário está logado como administrador


// Consulta SQL para buscar as reservas com as informações do cliente
$sql = "
    SELECT 
        reservas.id_reserva, 
        reservas.tp_quarto, 
        reservas.plano_refeicao, 
        reservas.entrada, 
        reservas.saida, 
        reservas.forma_pagamento, 
        usuarios.nome_usuario, 
        usuarios.email_usuario
    FROM reservas
    JOIN usuarios ON reservas.id_usuario = usuarios.id_usuario
";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Painel do Administrador - Reservas</title>
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
    
    <div class="container">
        <h1>Reservas</h1>

        <?php if ($resultado->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID da Reserva</th>
                        <th>Nome do Cliente</th>
                        <th>Email</th>
                        <th>Tipo de Quarto</th>
                        <th>Plano Refeição</th>
                        <th>Data de Entrada</th>
                        <th>Data de Saída</th>
                        <th>Forma de Pagamento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo ($row['id_reserva']); ?></td>
                            <td><?php echo ($row['nome_usuario']); ?></td>
                            <td><?php echo ($row['email_usuario']); ?></td>
                            <td><?php echo ($row['tp_quarto']); ?></td>
                            <td><?php echo ($row['plano_refeicao']); ?></td>
                            <td><?php echo ($row['entrada']); ?></td>
                            <td><?php echo ($row['saida']); ?></td>
                            <td><?php echo ($row['forma_pagamento']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p style="color:white; margin-top: 30px; text-align: center;">Nenhuma reserva encontrada.</p>
        <?php endif; ?>
    </div>
</body>
</html>