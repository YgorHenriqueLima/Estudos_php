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
        $atual = date('Y');
        $ano_nasc = $_POST['ano_nasc'] ?? '2000';
        $saber_ano = $_POST['saber_ano'] ?? $atual;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="iano_nasc">Ano de Nascimento</label>
            <input type="number" name="ano_nasc" id="iano_nasc" value="<?=$ano_nasc?>" min="1900" max="<?=$atual?>">

            <label for="isaber_ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$atual?></strong>) </label>
            <input type="number" name="saber_ano" id="isaber_ano" value="<?=$saber_ano?>" min="1900">
            <input type="submit" value="Enviar Resposta">
        
        </form>
    </main>
 
    <section id="resultado">
        <h1>Resultado</h1>
        <?php 
            $idade = $saber_ano - $ano_nasc;
            echo "<p>ERRO! a sua idade está maior que o ano atual</p>";
            echo "quem nasceu em $ano_nasc vai ter $idade anos em $saber_ano!";
        ?>
    </section>
    
</body>
</html>