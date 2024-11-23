<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

        switch ($o) {
            case 1:
                $r = $n * 2;
                break;

            case 2:
                $r = $n ** 3;
                break;

            case 3:
                if ($n < 0) {
                    echo "Não é possível calcular a raiz quadrada de um número negativo.";
                    exit;
                }
                $r = sqrt($n);
                break;

            default:
                $r = "Operação inválida.";
        }
        
        echo "O resultado da operação solicitada foi <strong>$r</strong>";
    ?>
</body>
</html>
