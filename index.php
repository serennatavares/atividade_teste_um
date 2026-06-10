<?php
    include("components/start.php")

    // Inicia sessão

    include("infra/db/connect.php");

    // Inclui o arquivo que cria a conexão com o banco de dados

    if($_SERVER['REQUEST_METHOD'] == "POST"){

    // Verifica se o formulário foi enviado utilizando método POST

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        // Armazena os valores do formulário em variáveis
        
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        // Cria a consulta SQL para verificar se o usuário e senha existem na tabela "usuarios"

        $resultado = $conn->query($sql);

        // Executa a consulta e armazena o resultado

        if ($resultado->num_rows > 0){
            // Verifica se a consulta retornou algum resultado (usuário e senha válidos)
            $_SESSION["usuario"] = $usuario;
            // Armazena o nome do usuário na sessão para manter o usuário logado

            $_SESSION["sucesso"] = "Login realizado com sucesso! Bem-vindo(a), $usuario.";
            
            header("Location: public/home.php");
            // Redireciona o usuário para a página "home.php" após o login bem-sucedido
            exit();
            // Encerra o script para evitar que o código abaixo seja executado após o redirecionamento
        }else{
            $erro = "Usuário ou senha inválidos!";
            // Define a variável $erro com uma mensagem de erro para exibir ao usuário
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

    <form method="POST">
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