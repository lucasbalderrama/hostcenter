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
                <label for="checkbox" id="botaonav">☰</label>
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
                    </div>

            <div class="bloco-reserva">
                    <div id="forma-pagamento">
                        <h2>Forma de pagamento</h2>
                        <div class="checkbox-wrapper-29">
                            <label class="checkbox">
                                <input type="checkbox" class="checkbox__input" name="forma_pagamento" />  
                                <span class="checkbox__label"></span>
                                Débito <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO2YOw7CMBBEfZBQIo7AEVJyBYRX4mwgPgXewH2oQWDJqzTIyNDGSZk1zJOmn/HuuhhjAAAAgF9ieZGJdbIjDp5Yog4FT06Oq3M7GzRPTm7jG5ZOWZZ78pgN8H358Y1Sv7bZALrWRrrlwrMngAKDPKxsgHm9iCXIIECNCUSsUBfFHzGV/o3SrwS4+pdKEQJ4TCBihfgffiFSLoMAjAlErFAXY68G4YhZf61inTxMDstyUB+AwyYbIHWPmqtFSt6aUGUDfA65CVWq71IDpsd4SF7261M77TUPAAAAmMJ4A08/Ru4Fa1HyAAAAAElFTkSuQmCC" alt="bank-card-back-side"  style="margin-left: 35px; height: 45px;">
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" class="checkbox__input" name="forma_pagamento" />  
                                <span class="checkbox__label"></span>
                                Crédito <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAJC0lEQVR4nO2W2VdU2RnFffJPcJ5ncVYUEEVEEBFQFHDAAQdUcMD0kJWk2+7Wtm1x1laTPPTq7jzEmE5EGcUBmeeiqkAQu7Wl5jvUSP6BnfWdc2/VLRpTlZesPNRZ63uoy7nn7N/+9jmXUaMiIzIiIzIiIzIi4/9o9PXljhYbCi6JjYUOuekE5OZiOFs+hLP1t3C1/R6u9k/h6vgc7s5zcHd9BY/uIjzdl+Htvgav/ga8hm/gM9yGz3gnUIbb8Bpuwau/Dm/3VXh0l+Dp+hruzvNwd5yFq/0zuNo+gbP1d3C2fAS5+TeQm05BajwOqeEohLrDdrEuv6Tvx9zRIQFoolhfAKnhGFuAFpKbP4Cz5WO2AW1EG9LGJICEeHQl8HRfCUDob3LBatFvv/jLDJrg3Z1fwt3xBVztZ+Bq+wMzicySm09DbjoJqbGIAYj1hyDW5cNRu6ckJIDwIt8h1h9mL9ICtBAt+N4uaCF01ImrCsh1RfQ1Lrz7CneeOtZ1QRF/Ntj91o8ht3zAui41nYDUWAipoQBi/UGIdfvhqM0TQgJMmzYNs2bNwvz587Fo0SIsW7YMK1euxOrVq5GQkICkpCSkpqYiPT0dWVlZyM3Nxe7du7F//34cOnQIx44dw4kTJ1BcXIzTp0/j1KlTKCoqwpEjR3DgwAHs3bsXO3fuRHZ2NrZs2YK0tDSkpKQgMTERa9asQWxsLKKjo7FkyRIsWLAAc+fOxcyZMzFlyhRMmDABYQPMmzcvCCAuLg5r167F+vXrsXHjRgawdetW5OTkYNeuXdi3bx8OHjzIhBYWFjIIquPHjzOow4cPIz8/H3v27MGOHTuwfft2ZGZmMoDk5GQGEB8fj5iYGKxYsSIIYMaMGeEDTJ061Q+wcOFCLF26lDlCzqgA5NjmzZuZgySEHCVhJJC6QBAkmuro0aMoKChgcARJ3aKubdu2DRkZGdi0aRM2bNiAdevWBQEsXrwYUVFRmDNnzn8PQC0jcnKAnKAFCYBaTE6RY7QxCSAhJIi6QPFQIchxtUg8RYwg1fhQ99LT01k3KZYUT4rpqlWrsHz5cgZAMZ49ezamT5+OyZMnY/z48aEBiJSIiZwcoIVoQVpYew7UGKldoFiQuwRBYglELXKexBMkRY6g1fikKPmn7lJMKa4UW4qvCkCxnjRpEsaNGxcagEiJmF4cfpDVczC8C3SYyVWCIJF5eXlMsFoERs5TpwiWoAk+NTV1xPhQ1ym+FGNKA6Vi4sSJGDt2bGgAItUeZO05oA1oI9pQ7QK5SG4SBIkjkQRCgtWi36rzanQIPjk5mZ0p1X1tfEbK/5gxY0IDOJ5lw/F8B4TaXRBe7IHwYh/EugP8Y9JQoHwfCpWP3EnlQ3eafz1b6IP3oVIfaYo/ow8im9dczN9roru+SLnvj4C+P/zOz4fwYi+E2jw4nu+E43kOHM+2w/50a2gA+9NtCEDs1kDkc4h6FYK+1EWQmrQgxQrMSKWKPqkIP64IPxYQXzdMfC2Jz1XEZ8H+JDMcgK1wPCOIHLgteritRnhsvfDY++FxDMDxzghjZx084i/wyib4nBb4XDb43AKGPBKGvE4M+dz415CX1ZDPw34PeWUMeUT43A4+32mBVx6EV/pF+VfhADyOV/DY+9h+tK/b0g23uUsRvwX2J+lhADzJgAqhBRAG9Wh49hCl97/DP+59C8HczwQEABxM4JBHhs/DIfxFUATnFuBz2+FzWeFzmgMAzPV9DOBvf7mLez/cxr3vb+He9zcVAC7eVpMWGsBWs5m1iiCYA1YDBgda8fDv36KjsRKytZ8BuIU3+PmVDk+qHqC5/ilaG2vRa+hEj74D1ZVlePK4Eg11z9HUUIvWpjp0tDWir6cLg2/64BLewSeb4JXfwSu99UeGA9wJAnCZO0Gmknjb49RwADaBQ2T4AapKf8BrQx08jn64HQN4cP87VJT+FVWP7uPNgB5GXTNMb/vwut+AnwZ64JZtsJnf4KeBXrx+ZUR/jw4GXStaGp6jpqoULQ01fve94ht+1mp38ZjaX8Jt64HbqofbomMAqnjb4+QwAB6nQIWgBdhCtuBzIJhfwvrWyAXI3E0eJSt8LjvPeVBRbGxKdCj7Jngl7r5X/JldGPywZrPoUvdZCpTYqOKt1UmhAazVG8Ag6KWaNLaIGil+Q21nB5xtqF63rMjFPAi1dGuNUOxveX63+fW4QyNcuWlY3ikym7mRjzfCVs3FW6sSwwCoSsRwCDVS7CYIAqHrNgDDRe3UQPHi16EqWBWdo3E8a5jrAfFWv/h1sFSuDQOgMoGRspeqk7kDNdpuaEGylCtXgWFFwghKU+ozxWnu9jaN45nDXKfIpDAjrVXr/eItFfGhASyV8WwyvSR2nIXY+SXErq8gdl2A2H2Jlay/AtlwHbLxBmTjLcjGbyD33Iaz5y6cvX+Es/dPcL78c6DoNz3vucvm8Xfo3RuQDVch6a/wtXUX+T5d5yF2noPY/gWE9s9gqVwDS8VqWCpiwwCoiOWTK9fAWqXthhqrjcHRqknXdCZTU1s0pT7LUEqNSZrGcTXrw1xXxZfHwly+MjSAuXwVI6WXhI4zEDo+525QJ3QXIOq+htR9EVL3ZeacpL8GyXADkvEmd5Yc7rkDufduoOi34jzNkwzXIem581L3JbYeW5s6Tft0nmX7Cm1n4Gj7BObyGCbeXLYiDICyFXxyeYwfhLmgxIp1hBxSusLPSYqmO0qHflXq32geOa24XZ3kd5w6zl2Ph6Uiju1PhprLomEuWw7To6WhAWgSTaaXhPZPAx0gh8h5wxXIxuv8DJCL1Am/g+chdpxThI1USUqtV4xIDI4KE746IFxx3Vy2DKZHS2B6uCg0wGDpQjtNNj9aprwcrSym6UhFvL8rvDMJioNqh95XypzKhBFEx40gnLtuerSYiR8sjbKFAbCgxPRwIUwPF7OXg0EoWqtg8cPEKREjIBUqABYo9bkqeLjomPcI566TnsHSKLx7MPdiSIC+H6NGD5bOLxksXWBnLxO9vyPLfwXDOlMeqwH6T6XMY4K1oqPfK9zEhM+3D/5zbglpCwkQGZERGZERGZERGaP+d+PfspQFxdKX+i0AAAAASUVORK5CYII=" alt="credit-card-emoji"  style="height: 45px;">
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" class="checkbox__input" name="forma_pagamento" />  
                                <span class="checkbox__label"></span>
                                Pix <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC9UlEQVR4nO1a3U7UUBDuCxj1Wi/0SgT8SdRLRe+UznS98THUB1B8E2OC8aYzFRI6pxjfQMEb9RFQWQUimiiRRDP7RwMtS09PS9cwyUnIbpnzfbNz5sw3u553ZP+Z+fGLk2D4CQoto/BPEP6BhpdQaKY1N3fCa7L5Cd1Ew1/R8N/MJdzWZ7wmGgjdQaHfueB7CwxvYUwtbxTBYxNJQEHwjSIBluDTJED47kiCP1QS4Ag8HgYJ1+CxThJVgcc6SQTz88eCmG+A8FMwvF0auNAf9eUndF19e7XfvMJr9uB5DUw4VSnIIImCTs3e2XgdDc3eNtFpfX86Di/v2z7kpgttBEJX1Yf6AuHnXd876aR7uwa/A0BoBRZ5TJ/zF6NLBUms98HDIo+B0Ke8M2FN4iAHFoRWMaGJgiTW/Ti80g1QeE4D4fzGLlJtlIS/EE3q/6Ghi0NIFAKPNiRsSmWaxHT88jwa/pxxYNtKMAU+M21KkdCqkpfzBziUXwITjmeSEG63JLzQAW/CcX3Wbg/eytUTqqRsqsluEoMzsRBNoqH3ugYpltCELXhMByNL2XVkYBnHGSTS5gS86e0R8+OM3Od3Lpz3SGwGwg/xVXhWl/6tr7nyj4aX9hBQAe5wg0oXGNrMSCGnEap2CX/P+ARo2WWE0ET3W8ncGU0hSOiBywCB4bdZBGZG5hAbfrSHgJam7mXjBryWThD+CMIfXJZREFq99zo8vodA1RfZ4BYueZHBsPa720rwr6JR6Ud+n37Iqg9C+37oYCQKdqTVN3OF2ul0zhdop/taIKiqnS4qaCxU2W5Bs5IH3r0q62hgmvUXwlN98CD0zeLQb4CJrvUlpfpM62sn4IeSi/lWWVHv1z1u1xqspQyEnrkYq4Dh7a6vcCq3vo/SYAurnlhXOVrEusbtVQx3se7vClyO1/GwvuiwaTsaA74siUaAtyXRKPBFSTQS/K5xe3u/zrXycXpZU2WncxvVrfozg85PDYTeqAys/KY9Mq9++wfSId/ImvikTwAAAABJRU5ErkJggg==" alt="pix" style="margin-left: 58px; height: 45px;">
                            </label>
                        </div>
                    </div>
                    <input type="submit" value="Reservar" name="submit" id="btn-reserva">
                </form>
                <p class="outro">Não possui uma conta? <a href="cadastro.php">Cadastre-se!</a></p>
            </div>
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