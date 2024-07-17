<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Recebe os valores do formulário ou define valores padrão
        $valor1 = $_POST['valor1'] ?? 1;
        $peso1 = $_POST['peso1'] ?? 1;
        $valor2 = $_POST['valor2'] ?? 1;
        $peso2 = $_POST['peso2'] ?? 1;
    ?>
    <section>
        <h1>Média Aritmética e Ponderada</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor1">Valor 1:</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" required>

            <label for="peso1">Peso 1:</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" required>
            
            <label for="valor2">Valor 2:</label>
            <input type="number" name="valor2" id="valor2"  value="<?=$valor2?>" required>

            <label for="peso2">Peso 2:</label>
            <input type="number" name="peso2" id="peso2"  value="<?=$peso2?>" required>
        
            <input type="submit" value="Calcular Média">
        </form>
    </section>
    <?php 
        // Calcula as médias
        $ma = ($valor1 + $valor2) / 2;
        $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
    ?>
    <section>
        <h1>Cálculo das Médias</h1>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?> com pesos <?=$peso1?> e <?=$peso2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($ma, 2, ",", ".")?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mp, 2, ",", ".")?>.</li>
        </ul>
    </section>
</body>
</html>
