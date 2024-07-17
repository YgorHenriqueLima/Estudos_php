<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado</h1>
    </header>
    <section>
        <?php
            $valor = $_POST['numero'] ?? 0;
            echo "o valor escolhido foi $valor<br>";
            echo "o sucessor de $valor é ".($valor+1)."<br>";
            echo "o antecessor de $valor é ".($valor-1);
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>