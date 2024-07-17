<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario_minimo = 1_640.00;
        $salario =  $_POST['salario'] ?? 0;
    ?>
    <section>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            
            <label for="isalario">Salário R$</label>
            <input type="number" name="salario" id="isalario" value="<?=$salario?>" step="0.01">

            <?="considerando o salário mínimo de R$". number_format($salario_minimo,2,',','.') ?>

            <input type="submit" value="Calcular">
        </form>
    </section>

    <section>
        <h1>Resultado final</h1>
        <?php 
            $tot = intdiv($salario, $salario_minimo);
            $dif = $salario % $salario_minimo;
            echo "<p>quem recebe um salário de<strong> R$". number_format($salario, 2, ",",".") ."</strong> ganha <strong>$tot</strong> salários mínimos + R\$ ". number_format($dif, 2,',','.') ."</p>";
        ?>
    </section>
</body>
</html>