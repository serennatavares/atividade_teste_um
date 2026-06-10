<?php
include("components/start.php");

include("../infra/db/connect.php"); // Conecta ao banco de dados

if($_SERVER["REQUEST_METHOD"] == "POST"){ // Verifica se o formulário de cadastro foi enviado

    $novoUsuario = $_POST['usuario']; // Recebe o usuário digitado
    $novaSenha = $_POST['senha']; // Recebe a senha digitada
    $confirmarSenha = $_POST["confirmar_senha"]; // Recebe a confirmação de senha

    // Verifica se as senhas são iguais ANTES de inserir no banco
    if($novaSenha != $confirmarSenha){
        echo "<script>alert('Eita!! As senhas não coincidem... Tente novamente');</script>"; // Mensagem de erro
    } else {

        // Comando SQL para inserir novo usuário
        $sql = "INSERT INTO usuarios (usuario, senha)
                VALUES ('$novoUsuario', '$novaSenha')";

        // Executa o INSERT
        if($conn->query($sql) === TRUE){
            echo "<script>alert('Usuário cadastrado com sucesso!');</script>"; // Mensagem de sucesso
        } else {
            echo "<script>alert('Ops, ocorreu um erro ao tentar cadastrar. Tente novamente!');</script>"; // Mensagem de erro
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-Vindo <?php echo $_SESSION["usuario"]; ?> ! Tomara que tenha uma ótima experiência.</h3>  <!-- Exibe o usuário logado -->
    <a href="logout.php"> Sair</a> <!-- Link para encerrar a sessão -->

    <hr>
    <h4>Cadastro de Novo Usuário.</h4> <!-- Formulário para cadastrar usuários -->
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <label>Confirmar Senha:</label>
        <input type="password" name="confirmar_senha">
   
        <?php
        
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    include("components/table.php") // Inclui a tabela que lista os usuários cadastrados

    ?>
    
</body>
</html>