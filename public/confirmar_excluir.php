<?php
include("components/start.php");
include("infra/db/connect.php");

$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Exclusão</title>
</head>
<body>
    <h2>Tem certeza que deseja excluir este usuário?</h2>

    <a href="excluir.php?id=<?php echo $id;?>">
        <button>Sim, excluir</button>
    </a>

    <a href="home.php">
    <button>Cancelar</button>
    </a>

</body>
</html>
