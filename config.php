<?php
    // Configurações do banco de dados
    $dbHost = 'localhost'; // Endereço do servidor do banco de dados
    $dbUsername = 'root'; // Nome de usuário do banco de dados
    $dbPassword = ''; // Senha do banco de dados
    $dbName = 'sistema-cadastro'; // Nome do banco de dados

    // Criação da conexão com o banco de dados
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Verifica se houve erro na conexão
    if ($conexao->connect_errno) {
        echo "Erro ao conectar ao banco de dados.";
    } else {
        echo "Conexão efetuada com sucesso.";
    }
?>
