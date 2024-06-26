<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        body {
            text-align: center;
            background-color: lightgrey;
        }

        div {
            margin: auto;
            background-color: lightblue;
            width: 40vw;
            border-radius: 20px;
            padding: 20px;
            font-size: 25px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        div p {
            background-color: yellow;
            text-align: center;
            padding: 10px;
        }
    </style>
    <title>Controle Remoto</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1> 
    <div>
        <p>MENU</p>
        <?php 
            require_once "ControleRemoto.php";
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->abrirMenu();
        ?>
    </div>
</body>
</html>