<h4>Usuários Cadastrados</h4> <!--titulo da tabela -->

<table border="1" cellpadding="3"> <!-- Cria a tabela -->

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios"; // Busca todos os usuários cadastrados

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios); // Executa a consulta

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){ // Percorre todos os registros retornados

    // fetch_assoc() transforma cada linha em um array associativo

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                    <td><a href='update.php?id=". $linha['id'] . "'>Editar</a></td>
                    <td><a href='confirmar_excluir.php?id=". $linha['id'] . "'>Excluir</a></td>
                </tr>
        ";

    }
    
    ?>

    
</table>