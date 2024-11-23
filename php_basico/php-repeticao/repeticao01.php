<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Curso de PHP</title>
</head>
<body>
    <main>
      <form action="<?=$_SERVER["PHP_SELF"] ?>" method="get">
            <?php
            
            $n = 1;

            while($n <= 5){    
                
                echo "<label for='v$n'>valor $n</label>";
                echo "<input type='number' name='v$n' id='v$n' min='0' max='100' value='0'><br>";

                $n++;
                
            }

            ?>
            
            <input type="submit" value="Enviar valores ">
      </form>
    </main>
    
    <section id="resultado">
            <?php
                $i = 1;
                while($i <= 5){
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                    $i++;
                }
                
                echo "$num1 $num2 $num3 $num4 $num5";
            
            ?>
    </section>
</body>
</html>