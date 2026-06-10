<?php
//Abre um bloco de código PHP.
include("components/start.php")
//Inicia uma nova sessão ou retoma a sessão existente. Isso é necessário para acessar as variáveis de sessão.

include("../infra/db/connect.php");
//Pega o conteúdo do arquivo connect.php e coloca aqui. Esse arquivo contém a conexão com o banco de dados.

$id = $_GET['id'];

$$sql = "SELECT * FROM usuarios WHERE id = $id";
$resultado = $conn -> query($sql);
$usuario = $resultado -> fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novoUsuario = $_POST["usuario"];
    $novaSenha = $_POST["senha"];

    $sqlUpdate = " UPDATE usuarios SET usuario = '$novoUsuario', senha = '$novaSenha' WHERE id = $id";

    if($conn -> query($sqlUpdate) === TRUE){

    echo "<script>
            alert('Usuário atualizado com sucesso!');
            window.location='home.php';
          </script>";
    exit();
    }


}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<h2>Editar Usuário</h2>
<form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario" value =" <?php echo $usuario['usuario'] ?>">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" value =" <?php echo $usuario['senha'] ?>">
        <br>
        <br>
        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>


