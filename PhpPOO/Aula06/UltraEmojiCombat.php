<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            margin-top: 20px;
        }
        #luta {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .lutador {
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            width: 300px;
        }
        .lutador p {
            margin: 10px 0;
        }
        p.nome_lutador {
            font-size: 24px;
            font-weight: bold;
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
        p#empate {
            font-size: 20px;
            color: yellow;
            background-color: lightslategray;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 10px;
        }
        p#desafiado {
            font-size: 20px;
            background-color: lightcoral;
            padding: 10px;
            border-radius: 10px;
            color: blue;
            text-align: center;
            margin-bottom: 10px;
        }
        p#desafiante {
            font-size: 20px;
            color: green;
            background-color: orange;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 10px;
        }
        h1 {
            margin-top: 40px;
            font-size: 36px;
            color: #333;
        }
    </style>
    <title>Ultra Emoji Combat</title>
</head>
<body>
    <h1>Ultra Emoji Combat</h1>
    <div class="container">
        <div id="luta">
            <?php 
                require_once 'Lutador.php';
                require_once 'Luta.php';

                $l = array();
              
                $l[0] = new Lutador("👦 Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
                $l[1] = new Lutador("💻 PutsScript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
               
                $l[2] = new Lutador("👤 SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
                $l[3] = new Lutador("☠️ Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
               
                $l[4] = new Lutador("👽 UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
                $l[5] = new Lutador("🤓 Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);


                $UEC01 = new Luta();
                $UEC01->marcarLuta($l[2], $l[3]);
                $UEC01->lutar();
            ?>
        </div>
        <div>
            <h2>Resultado da Luta</h2>
            <div class="lutador">
                <?php $l[2]->status(); ?>
            </div>
            <br>
            <div class="lutador">
                <?php $l[3]->status(); ?>
            </div>
        </div>
    </div>
</body>
</html>
