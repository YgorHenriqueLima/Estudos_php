<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="ds">Dia da Semana</label>
            <input type="number" name="ds" id="ds" min="2" max="8" required>

            <input type="submit" value="Enviar">
        </form>
    </main>


    <section id="resultado">
        <?php
            $d = isset($_GET["ds"]) ? $_GET["ds"]:0;
            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "levanta e vai estudar! :)";
                    break;
                case 7:
                case 8:
                    echo "descanse, pequeno gafanhoto";
                    break;
                default:
                    echo "dia da semana inválido";
                    break;
            }
        ?>
    </section>
</body>
</html>