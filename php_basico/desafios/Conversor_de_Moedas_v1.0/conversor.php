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
        <h1>Resultado</h1>
    </header>
    <section>
    <?php 
        $real = $_GET['moeda'];
        $cotacao = 5.45;
        $dolar = $real / $cotacao;
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        
        echo "<p>Valor em reais: $real</p>";
        echo "<p>Cotação do dólar: $cotacao</p>";
        echo "<p>Valor em dólares: $dolar</p>";
        echo "<p>Formato BRL: " . numfmt_format_currency($padrao, $real, "BRL") . "</p>";
        echo "<p>Formato USD: " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";

    ?>
    </section>
   
</body>
</html>