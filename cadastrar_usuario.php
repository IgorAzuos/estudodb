<?php
// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Conecta ao banco de dados SQLite
$db = new SQLite3('users.db');

// Insere os dados na tabela "Lista de usuários"
$db->exec("INSERT INTO 'Lista de usuários' (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

// Fecha a conexão com o banco de dados
$db->close();

// Redireciona para a página de sucesso
header('Location: cadastro_sucesso.html');
?>
