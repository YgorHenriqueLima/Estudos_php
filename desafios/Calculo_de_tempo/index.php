<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_POST['segundos'] ?? 0;
    ?>
    <section>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <?php 
        /*
            1 min -> 60 seg
            1 hora -> 60 min * 60 -> 3600 seg
            1 dia -> 24h * 3600 seg -> 86.400 seg
            1 semana -> 7 dias * 86.400 seg -> 604.800 seg
        */
        $sobra = $total;
        // total de semanas
        $semana = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;
        // total de dias
        $dia = (int) ($sobra / 86_400);
        $sobra = $sobra % 86_400;
        // total de horas
        $hora = (int) ($sobra / 3_600);
        $sobra = $sobra % 3_600;
        // total de minutos
        $minuto = (int) ($sobra / 60);
        $sobra = $sobra % 60;
        // total de segundos
        $segundo = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total,0,",",".")?> segundos</strong> equivalem a:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>
