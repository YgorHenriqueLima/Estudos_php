<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_POST['v1'] ?? 0;
        $valor2 = $_POST['v2'] ?? 0;
    ?>

    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" step="0.1" required>
            
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<>" step="0.1" required >
            
            <input type="submit" value="Somar">
        </form>
    </main>

 
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            if($valor1 && $valor2 != 0 ){    
                $soma = $valor1 + $valor2;
                print "<p>a soma entre os valores $valor1 e $valor2 é igual a <strong>$soma</strong></p>";
            }
            else {
                echo "<p>Digite os valores Válidos Acima</p>";
            }
        ?>
    </section>
    
</body>
</html>