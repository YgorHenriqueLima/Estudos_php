<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "Caneta.php";
        $c1 = new Caneta("BIC", "Azul",0.5);
        echo "<p>eu tenho uma caneta do modelo {$c1->getModelo()} de ponta {$c1->getPonta()}</p>";
    ?>
</body>
</html>