<?php
//Abre um bloco de código PHP.
session_start();
//Inicia uma nova sessão ou retoma a sessão existente. Isso é necessário para acessar as variáveis de sessão.

include("../infra/db/connect.php");
//Pega o conteúdo do arquivo connect.php e coloca aqui. Esse arquivo contém a conexão com o banco de dados.

$id = $_GET['id'];

$sql = "UPDATE usuarios SET usuario='Thais', senha='333' WHERE id=$id";
//Faça isso no registro com id 1

$conn->query($sql);
//Essa linha executa o comando. $conn = conexão com o banco. query() = envia uma consulta SQL.

header("Location: home.php");
//Redireciona o usuário para a página home.php após a execução do comando SQL.
?>


