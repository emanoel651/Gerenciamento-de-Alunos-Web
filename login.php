<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/movendo.js"></script>
</head>
<body>
    <!-- Link para voltar -->
    <a href="#" id="sairLink" class="back">Voltar</a>
    <!-- Container principal -->
    <div class="container">
        <div class="box">
            <!-- Título "Login" -->
            <h1 class="login">Login</h1>
            <!-- Formulário de login -->
            <form action="testLogin.php" method="POST">
                <!-- Campo de entrada para o CPF -->
                <input type="text" name="cpf" placeholder="Cpf">
                <br><br>
                <!-- Campo de entrada para a senha -->
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <!-- Botão de envio -->
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>
