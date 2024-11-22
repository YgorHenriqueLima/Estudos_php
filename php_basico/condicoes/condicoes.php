<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"]:1924;
        $i = date("Y") - $a;
    ?>
    <main>
        <h1>condições no PHP</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="ano" placeholder="4 digitos">
            <input type="submit" value="Verificar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            echo "você nasceu em $a e terá $i anos <br>";
            if($i < 16){
                $tipoVoto = "não vota";
            }
            elseif(($i >= 16 && $i < 18) || ($i > 65)){
                $tipoVoto = "voto opcional";
            }
            else {
                $tipoVoto = "voto obrigatório";
            }
            echo "para essa idade, $tipoVoto";
        ?>
    </section>
</body>
</html>