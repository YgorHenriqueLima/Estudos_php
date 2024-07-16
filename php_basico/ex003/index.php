<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: lightsalmon;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 3em;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "João";
        $sobrenome = "Paulo";
        const PAIS = "Brasil";
        echo "muito prazer $nome $sobrenome! você mora no ". PAIS;

    ?>
</body>
</html>