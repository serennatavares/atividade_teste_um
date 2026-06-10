<?php

    session_start(); // Inicia a sessão atual
    session_destroy();  // Remove todos os dados da sessão
    header("Location: ../index.php"); // Redireciona para a tela de login
    exit(); // Encerra o script

?>
