<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_GET["n1"] ?? 0;
        $valor2 = $_GET["n2"] ?? 0;
    ?>
    <main>
        <h1>Média</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Nota 1</label>
            <input type="number" name="n1" id="n1" value="<?=$valor1?>" min="0" max="10" required>
            
            <label for="n2">Nota 2</label>
            <input type="number" name="n2" id="n2" value="<?=$valor2?>" min="0" max="10" required>

            <input type="submit" value="Calcular Média">
        </form>
    </main>
    <section id="resultado">
        <h1>Resultado</h1>
        <?php
            // Validação no backend
            if ($valor1 >= 0 && $valor1 <= 10 && $valor2 >= 0 && $valor2 <= 10) {
                $media = ($valor1 + $valor2) / 2;
                if ($media >= 6.0) {
                    echo "<p>Passou de ano! Sua média foi <strong>$media</strong>.</p>";
                } else {
                    echo "<p>Recuperação. Sua média foi <strong>$media</strong>.</p>";
                }
            } else {
                echo "<p>Insira valores entre 0 e 10.</p>";
            }
        ?>
    </section>
</body>
</html>
