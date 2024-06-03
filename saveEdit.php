<?php
    // isset -> serve para saber se uma variável está definida
    // Inclui o arquivo de configuração, que normalmente contém a conexão com o banco de dados
    include_once('config.php');
    
    // Verifica se o botão de atualização foi clicado
    if(isset($_POST['update']))
    {
        // Obtém os dados do formulário via método POST
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $matricula = $_POST['matricula'];
        
        // Cria uma consulta SQL para atualizar os dados do usuário no banco de dados
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome', senha='$senha', email='$email', telefone='$telefone', sexo='$sexo', data_nasc='$data_nasc', cidade='$cidade', estado='$estado', matricula='$matricula'
        WHERE id=$id";
        
        // Executa a consulta no banco de dados
        $result = $conexao->query($sqlInsert);
        
        // Exibe o resultado da operação (para debug, normalmente removido em produção)
        print_r($result);
    }
    
    // Redireciona o usuário para a página do sistema após a atualização
    header('Location: sistema.php');
    
    // Importante: É uma boa prática usar exit após um redirecionamento para garantir que
    // o script pare de ser executado
    exit();
?>
