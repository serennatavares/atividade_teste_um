<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">
    // Cabeçalho da tabela

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    // Corpo da tabela preenchido dinamicamente com os dados do banco de dados

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios";
    // Consulta SQL para selecionar todos os registros da tabela "usuarios"

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);
    // Executa a consulta SQL e armazena o resultado em uma variável

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // o fetch assoc

         echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                    <td><a href='update.php?id=" . $linha['id'] . "'>Editar</a></td> // links para página de atualizar usuario e senha  
                    <td><a href='delete.php?id=" . $linha['id'] . "'>Excluir</a></td> // links para página de excluir usuario e senha  

                </tr>
        ";


    }
    
    ?>

    


</table>