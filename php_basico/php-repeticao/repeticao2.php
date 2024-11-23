<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Passos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerador de Sequência</h1>
        <!-- Formulário retroalimentado -->
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <label for="numero">Digite um número limite:</label>
            <input type="number" id="numero" name="numero" value="<?= isset($_POST['numero']) ? htmlspecialchars($_POST['numero']) : '' ?>" required>
            <br><br>

            <label for="passos">Digite o tamanho do passo:</label>
            <input type="number" id="passos" name="passos" value="<?= isset($_POST['passos']) ? htmlspecialchars($_POST['passos']) : '' ?>" required>
            <br><br>

            <input type="submit" value="Gerar sequência">
        </form>
    </main>

    <section id="resultado">
        <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtém os valores enviados
            $numero = intval($_POST['numero']);
            $passos = intval($_POST['passos']);

            // Valida os valores
            if ($numero > 0 && $passos > 0) {
                echo "<h2>Sequência gerada:</h2>";
                echo "<p>";
                for ($i = $passos; $i <= $numero; $i += $passos) {
                    echo $i . " "; // Exibe o valor atual da sequência
                }
                echo "</p>";
            } else {
                echo "<p style='color:red;'>O número limite e o passo devem ser maiores que zero!</p>";
            }
        }
        ?>
    </section>
</body>
</html>
