<?php

include("components/start.php");

include("../infra/db/connect.php");

$id = $_GET["id"];

$sql = " DELETE FROM usuarios WHERE id = $id ";

if($conn->query($sql) === TRUE){
    header("Location: home.php");
    exit();
}

?>
