<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>    
        <h1>Resultados das funções aritméticas</h1>
    </header>
    <section>
        <?php 
            $r = abs(-2000);
            echo "Resultado: $r <br>";

            $r2 = base_convert(254, 10, 8);
            echo "Resultado: $r2 <br>";

            $r3 = ceil(550.70);
            echo "Resultado: $r3 <br>";

            $r4 = floor(550.70);
            echo "Resultado: $r4 <br>";

            $r5 = round(550.70);
            echo "Resultado: $r5 <br>";

            $r6 = hypot(50,10);
            echo "Resultado: $r6 <br>";

            $r7 = intdiv(5,2);
            echo "Resultado: $r7 <br>";

            $r8 = min(5,20,40,70);
            echo "o mínimo é $r8 <br>";

            $r9 = max(10,70,1000,4,50,100000);
            echo "o máximo é $r9 <br>";

            $min = 0;
            $max = 100;

            $r10 = rand($min, $max);
            echo "o valor sorteado foi $r10";
        ?>
    </section>
</body>
</html>