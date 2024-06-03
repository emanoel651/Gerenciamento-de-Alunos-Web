<?php
    // Inicia a sessão, permitindo o uso de variáveis de sessão
    session_start();
    
    // Remove a variável de sessão 'cpf'
    unset($_SESSION['cpf']);
    
    // Remove a variável de sessão 'senha'
    unset($_SESSION['senha']);
    
    // Redireciona o usuário para a página de login
    header("Location: login.php");
    
    // Importante: É uma boa prática usar exit após um redirecionamento para garantir que
    // o script pare de ser executado
    exit();
?>
