<?php
    // Verifica se o parâmetro 'id' não está vazio na URL
    if (!empty($_GET['id'])) {
        // Inclui o arquivo de configuração (presumivelmente contém detalhes de conexão com o banco de dados)
        include_once('config.php');

        // Obtém o valor 'id' da URL
        $id = $_GET['id'];

        // Cria uma consulta SQL para selecionar dados da tabela 'usuarios' onde o 'id' corresponda
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        // Executa a consulta e armazena o resultado
        $result = $conexao->query($sqlSelect);

        // Se houver linhas retornadas (ou seja, o usuário com o 'id' especificado existe)
        if ($result->num_rows > 0) {
            // Cria uma consulta SQL para excluir o usuário com o 'id' especificado
            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            // Executa a consulta de exclusão
            $resultDelete = $conexao->query($sqlDelete);
        }
    }

    // Redireciona para a página 'sistema.php'
    header('Location: sistema.php');
?>
