<?php
    // Inicia a sessão para permitir o uso de variáveis de sessão
    session_start();
    
    // Inclui o arquivo de configuração, que geralmente contém a conexão com o banco de dados
    include_once('config.php');
    
    // Verifica se o usuário está logado, ou seja, se as variáveis de sessão 'cpf' e 'senha' estão definidas
    if((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true))
    {
        // Se não estiver logado, limpa as variáveis de sessão e redireciona para a página de login
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    
    // Armazena o CPF do usuário logado em uma variável
    $logado = $_SESSION['cpf'];
    
    // Verifica se há uma busca sendo feita (se o parâmetro 'search' foi passado via GET)
    if(!empty($_GET['search']))
    {
        // Se há uma busca, monta a consulta SQL para procurar usuários que correspondam ao termo de busca
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        // Se não há busca, seleciona todos os usuários ordenados pelo ID de forma decrescente
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    
    // Executa a consulta SQL
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sistema.css">
</head>
<body>
    <!-- Link para cadastrar um novo aluno -->
    <a href="formulario_aluno.php" class="cadastrar">Cadastrar aluno</a>
    <!-- Link para sair do sistema -->
    <a href="sair.php" class="btn btn-danger btn-exit">Sair</a>
    <div class="m-5">
        <!-- Tabela para exibir os usuários -->
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Itera sobre os resultados da consulta e exibe cada usuário em uma linha da tabela
                while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['senha']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['telefone']."</td>";
                    echo "<td>".$user_data['sexo']."</td>";
                    echo "<td>".$user_data['data_nasc']."</td>";
                    echo "<td>".$user_data['cidade']."</td>";
                    echo "<td>".$user_data['estado']."</td>";
                    echo "<td>".$user_data['matricula']."</td>";
                    echo "<td>
                        <!-- Link para editar o usuário -->
                        <a class='btn btn-sm btn-primary btn-edit' href='edit.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                        </a> 
                        <!-- Link para deletar o usuário -->
                        <a class='btn btn-sm btn-danger btn-delete' href='delete.php?id=$user_data[id]' title='Deletar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
