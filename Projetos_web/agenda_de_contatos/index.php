<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Agenda de contatos</title>
</head>
<body>
    <section>
        <form action="adicione_contato.php" method="post">
            
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone">
        
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        
            <label for="endereco">Endereço:</label>
            <textarea name="endereco" id="endereco"></textarea>
            <button type="submit">Adicionar contato</button>
        </form>
    </section>
   
    <section>
        <h2>Contatos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include 'db.php';

                $query = "SELECT * FROM contatos";
                $resultado = mysqli_query($conexao, $query);

                while ($row = mysqli_fetch_assoc($resultado)){
                    echo "<tr>"; 
                        echo "<td>".htmlspecialchars($row['id'])."</td>";
                        echo "<td>".htmlspecialchars($row['nome'])."</td>";
                        echo "<td>".htmlspecialchars($row['telefone'])."</td>";
                        echo "<td>".htmlspecialchars($row['email'])."</td>";
                        echo "<td>".htmlspecialchars($row['endereco'])."</td>";
                    echo "</tr>";
                }
                mysqli_close($conexao);
            ?>
            </tbody>
        </table>
        
            
    </section>

</body>
</html>