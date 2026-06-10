<?php
include("components/start.php")
// Verifica se o usuário está logado, caso contrário, redireciona para a página de login

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    // Verifica se os campos de usuário e senha foram preenchidos

    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  
    // Prepara a consulta SQL para inserir um novo usuário na tabela "usuarios"

    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

    // Executa a consulta SQL e exibe uma mensagem de sucesso ou erro dependendo do resultado

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

// Exibe uma mensagem de boas-vindas com o nome do usuário logado, utilizando a variável de sessão "usuario"
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        label>Confirmar Senha:</label>
        <input type="password" name="confirmar_senha">
        <?php
        
            if(isset($erro)){
                echo $erro;
            };

            // Verifica se a variável de erro está definida e, se estiver, exibe a mensagem de erro

            if($_POST['senha'] != $_POST['confirmar_senha']){
            echo "As senhas não coincidem!";

            }

            // Verifica se as senhas digitadas nos campos "senha" e "confirmar_senha" são iguais, e exibe uma mensagem de erro caso contrário
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    include("components/table.php")
    // Inclui o arquivo que contém a tabela de usuários cadastrados, que é preenchida dinamicamente com os dados do banco de dados

    ?>



</body>
</html>