<?php
    // Inicia a sessão para permitir o uso de variáveis de sessão
    session_start();

    // Verifica se o formulário foi submetido e se os campos 'cpf' e 'senha' não estão vazios
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha']))
    {
        // Inclui o arquivo de configuração, que geralmente contém a conexão com o banco de dados
        include_once('config.php');
        
        // Obtém os dados do formulário via método POST
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        // Cria uma consulta SQL para verificar se existe um usuário com o CPF e a senha fornecidos
        $sql = "SELECT * FROM alunos WHERE cpf = '$cpf' and senha = '$senha'";

        // Executa a consulta no banco de dados
        $result = $conexao->query($sql);

        // Verifica o número de linhas retornadas pela consulta
        if(mysqli_num_rows($result) < 1)
        {
            // Se não encontrou um usuário, limpa as variáveis de sessão e redireciona para a página de login
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            // Se encontrou um usuário, define as variáveis de sessão e redireciona para a página do sistema
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Se os campos 'cpf' e 'senha' estiverem vazios ou o formulário não foi submetido, redireciona para a página de login
        header('Location: login.php');
    }
?>
