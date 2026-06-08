<?php

    include("components/start.php")
    session_destroy();
    header("Location: ../index.php");
    exit();

    // Inicia a sessão, destrói todas as variáveis de sessão e redireciona o usuário para a página de login (index.php)

?>