<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}
// Verifica se o usuário está logado, caso contrário, redireciona para a página de login
?>