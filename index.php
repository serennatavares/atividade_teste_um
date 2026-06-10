<?php
    session_start(); //inicia uma sessão 

    include("infra/db/connect.php"); // inclui o arquivo que conecta com o banco de dados 

    if($_SERVER['REQUEST_METHOD'] == "POST"){ //SE o formulário for enviado por POST ele vai executar o resto 

        $usuario = $_POST["usuario"]; //recebe as variáveis enviadas pelo formulário 
        $senha = $_POST["senha"];
        
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'"; //consulta no banco de dados por um usuário com o login e senha informados

        $resultado = $conn->query($sql); //Executa a consulta SQL 

        if ($resultado->num_rows > 0){ // verifica se foi encontrado o usuário e sennha no banco de dados 
            $_SESSION["usuario"] = $usuario; // Armazena o nome do usuário na sessão
            
            header("Location: public/home.php"); // Redireciona para a página inicial do sistema
            exit();
        }else{
            $erro = "Ops! Usuário ou senha incorretos. Tente novamente."; //mensagem de erro caso o usuário e/ou senha não sejam encontrados no banco de dados 
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Sitema de Login Simples</h1>  

    <form method="POST">    <!-- formulário com usuário e senha para login --> 
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
            <?php
            
                if(isset($erro)){
                    echo $erro;
                };

            ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>