<?php

    $host = "localhost"; // Endereço do servidor MySQL
    $user = "root"; // Usuário do banco de dados 
    $pass = "root"; // Senha do banco
    $db = "sistema_simples_m1"; // Nome do banco de dados

    $conn = new mysqli($host,$user,$pass,$db); // Cria a conexão com o MySQL

    if($conn->connect_error){ // Verifica se ocorreu erro na conexão
        die("Erro na conexão!");
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>


?>