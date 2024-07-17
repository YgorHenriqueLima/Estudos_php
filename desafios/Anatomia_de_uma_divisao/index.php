<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_POST['dividendo'] ?? 0; 
        $divisor = $_POST['divisor'] ?? 1;
    ?>

    <section>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="idividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idividendo" min="0" value="<?=$dividendo?>">

            <label for="idivisor">Divisor</label>
            <input type="number" name="divisor" id="idivisor" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </section>

    <section id="resultado">
        <h1>Resultado da divisão</h1>
        
        <?php 
            /*MINHA RESPOSTA
            if($dividendo && $divisor != 0){
             
                echo "O dividendo é $dividendo <br>";
                echo "o divisor é $divisor <br>";
                echo "o resto da divisão entre $dividendo e $divisor é $resto <br>";
                echo "e o quociente é $quociente";
            }else {
                echo "digite uma divisão válida";
            }
            */

            /*resposta do Curso em Vídeo*/
            $resto = $dividendo % $divisor;
            $quociente = intdiv($dividendo, $divisor);

        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>