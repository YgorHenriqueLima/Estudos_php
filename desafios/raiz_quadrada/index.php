<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício das Raízes</title>
</head>
<body>
    <?php 
        $numero = $_POST['numero'] ?? 0;
    ?>
    <section>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="inumero">Número</label>
            <input type="number" name="numero" id="inumero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raiz">
        </form>
    </section>

    <section id="resultado">
        <h1>Resultado Final</h1>
        <?php 
            $raiz_cubica = $numero ** (1/3);
            $raiz_quadrada = sqrt($numero);
            echo "Analisando o <strong>número $numero</strong>, Temos: ";
            echo "<ul><li>a sua raiz quadrada é ".number_format($raiz_quadrada, 3, ',','.') . "</li><li>a sua raiz cúbica é ". number_format($raiz_cubica,3,',','.') ."</li></ul>";
       ?>
    </section>
</body>
</html>