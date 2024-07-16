<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <section>
    <?php 
        $a = 10;
        $b = 5;

        $s = $a + $b; // 15
        $sub = $a - $b; // 5
        $m = $a * $b; // 50
        $d = $a / $b; // 2
        $resto_div = $a % $b; // 0
        $potencia = $a**$b; // 100000

        echo <<< RESULTADO
            a soma entre $a e $b é $s<br>
            a subtração entre $a e $b é $sub<br>
            a multiplicação entre $a e $b é $m<br>
            a divisão entre $a e $b é $d<br>
            o resto da divisão entre $a e $b é $resto_div<br>
            a potência de $a elevado a $b é $potencia
        RESULTADO;

        $c = 20;
        $d = 20;
        $incremento = $c++;
        $decremento = $d--;
        echo"<br>";
        echo "o incremento de c é $c e decremento de d é $d";
    ?>
    </section>
</body>
</html>