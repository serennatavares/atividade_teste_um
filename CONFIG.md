# Configuração

## NA ESCOLA

### Na pagina connect você coloca:
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";

    $conn = new mysqli($host,$user,$pass,$db);

## EM CASA

### Na pagina connect você coloca:
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema_simples_m1";
    $port = 3308;

    $conn = new mysqli($host,$user,$pass,$db,$port);


# Diretório para acesso da página

    http://localhost/atividade_teste_um/
