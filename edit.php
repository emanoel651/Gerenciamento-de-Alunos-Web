<?php
    // Inclui o arquivo de configuração para conectar ao banco de dados
    include_once('config.php');

    // Verifica se o parâmetro 'id' não está vazio na URL
    if (!empty($_GET['id'])) {
        // Obtém o valor 'id' da URL
        $id = $_GET['id'];
        
        // Cria uma consulta SQL para selecionar dados da tabela 'usuarios' onde o 'id' corresponda
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        
        // Executa a consulta e armazena o resultado
        $result = $conexao->query($sqlSelect);
        
        // Se houver linhas retornadas (ou seja, o usuário com o 'id' especificado existe)
        if ($result->num_rows > 0) {
            // Obtém os dados do usuário e armazena em variáveis
            while ($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $matricula = $user_data['matricula'];
            }
        } else {
            // Redireciona para 'sistema.php' se o usuário não for encontrado
            header('Location: sistema.php');
        }
    } else {
        // Redireciona para 'sistema.php' se o 'id' não estiver na URL
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <!-- Campo de entrada para o nome -->
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <!-- Campo de entrada para a senha -->
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <!-- Campo de entrada para o email -->
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <!-- Campo de entrada para o telefone -->
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <!-- Seleção de gênero -->
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br><br>
                <!-- Campo de entrada para a data de nascimento -->
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value=<?php echo $data_nasc;?> required>
                <br><br><br>
                <!-- Campo de entrada para a cidade -->
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value=<?php echo $cidade;?> required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <!-- Campo de entrada para o estado -->
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value=<?php echo $estado;?> required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <!-- Campo de entrada para a matrícula -->
                <div class="inputBox">
                    <input type="number" name="matricula" id="matricula" class="inputUser" value=<?php echo $matricula;?>  required>
                    <label for="matricula" class="labelInput">Matrícula</label>
                </div>
                <br><br>
                <!-- Campo oculto para o ID -->
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <!-- Botão de envio -->
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
