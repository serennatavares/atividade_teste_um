<?php

    $host = "localhost";
    // Endereço do servidor do banco de dados (geralmente "localhost" para servidores locais)
    $user = "root";
    // Nome de usuário do banco de dados (geralmente "root" para servidores locais)
    $pass = "";
    // Senha do banco de dados (geralmente "root" para servidores locais)
    $db = "sistema_simples_m1";
    // Nome do banco de dados que será utilizado

    $port = 3308;

    $conn = new mysqli($host,$user,$pass,$db,$port);
    // Cria uma nova conexão com o banco de dados

    if($conn->connect_error){
        // Verifica se houve um erro na conexão
        die("Erro na conexão!");
        // Encerra o script e exibe uma mensagem de erro caso a conexão falhe
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
        // Exibe uma mensagem no console do navegador indicando que a conexão foi bem-sucedida
    };

?>