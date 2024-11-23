<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerenciador de Arrays</h1>
        <!-- Formulário retroalimentado -->
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <label for="numero">Adicione um número ao array:</label>
            <input type="number" id="numero" name="numero" <?= isset($_POST['numero']) ? "value='" . htmlspecialchars($_POST['numero']) . "'" : "" ?> required>
            <br><br>

            <input type="submit" name="adicionar" value="Adicionar ao Array">
            <input type="submit" name="limpar" value="Limpar Array">
        </form>
    </main>

    <section id="resultado">
        <?php
        // Inicia ou recupera o array da sessão
        session_start();

        // Inicializa o array na sessão se não existir
        if (!isset($_SESSION['arrayNumeros'])) {
            $_SESSION['arrayNumeros'] = [];
        }

        // Verifica se o botão 'Limpar' foi clicado
        if (isset($_POST['limpar'])) {
            $_SESSION['arrayNumeros'] = []; // Limpa o array na sessão
            echo "<p>O array foi limpo!</p>";
        }

        // Verifica se o botão 'Adicionar' foi clicado
        if (isset($_POST['adicionar'])) {
            $numero = intval($_POST['numero']);
            $_SESSION['arrayNumeros'][] = $numero; // Adiciona ao array na sessão
        }

        // Exibe o array
        if (!empty($_SESSION['arrayNumeros'])) {
            echo "<h2>Array Atual:</h2>";
            echo "<p>" . implode(", ", $_SESSION['arrayNumeros']) . "</p>";

            // Calcula a soma dos valores no array
            $soma = array_sum($_SESSION['arrayNumeros']);
            echo "<p>Soma dos valores: $soma</p>";
        } else if (!isset($_POST['limpar'])) {
            echo "<p>O array está vazio.</p>";
        }
        ?>
    </section>
</body>
</html>
