<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .nota {
            height: 50px;
            margin: 5px;
            list-style: none;
        }
    </style>
</head>
<body>

    <?php 
        $saque = $_GET['saque'] ?? 0;
    ?>

    <section>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            
            <label for="saque">qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            
            <input type="submit" value="Sacar">
        </form>
    </section>
    <?php 
        $resto = $saque;
        
        // saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        // saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        // saque de R$20
        $tot20 = floor($resto / 20);
        $resto %= 20;

        // saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        // saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;

        // saque de R$2
        $tot2 = floor($resto / 2);
        $resto %= 2;

        $tot1 = floor($resto / 1);
        $resto %= 1;
    ?>
    
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>

        <ul>
            <li style="list-style: none;">
                <img src="./100-reais.jpg" alt="nota de 100" class="nota"> x<?=$tot100?>
            </li>

            <li style="list-style: none;">
                <img src="./50-reais.jpg" alt="nota de 50" class="nota">x<?=$tot50?>
            </li>

            <li style="list-style: none;">
                <img src="./20-reais.jpg" alt="nota de 20" class="nota">x<?=$tot20?>
            </li>

            <li style="list-style: none;">
                <img src="./10-reais.jpg" alt="nota de 10" class="nota">x<?=$tot10?>
            </li>
            
            <li style="list-style: none;">
                <img src="./5-reais.jpg" alt="nota de 5" class="nota">x<?=$tot5?>
            </li>

            <li style="list-style: none;">
                <img src="./2-reais.jpg" alt="nota de 2" class="nota">x<?=$tot2?>
            </li>
            
            
            <li style="list-style: none;">
                <img src="./1-real.jpg" alt="nota de 1" class="nota">x<?=$tot1?>
            </li>
            
        </ul>
    </section>

</body>
</html>