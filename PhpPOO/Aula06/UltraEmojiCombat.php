<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        div {
            background-color: white;
            padding: 10px;
            border-radius: 20px;
            margin: auto;
            width: 50vw;
            margin-bottom: 10px;
        }
        p.nome_lutador {
            color: red;
        }
    </style>
    <title>Ultra Emoji Combat</title>
</head>
<body>
    <?php 
        require_once 'Lutador.php';
        $l = array();
        
        $l[0] = new Lutador("Pretty Boy","França",31,1.75,68.9,11,2,1);
        $l[1] = new Lutador("PutsScript","Brasil",29,1.68,57.8,14,2,3);
        $l[2] = new Lutador("SnapShadow", "EUA", 35,1.65,80.9,12,2,1);
        $l[3] = new Lutador("Dead Code","Austrália",28,1.93,81.6,13,0,2);
        $l[4] = new Lutador("UFOCobol", "Brasil", 37,1.70,119.3,5,4,3);
        $l[5] = new Lutador("Nerdaart", "EUA", 30,1.81,105.7,12,2,4);
        
        $l[0]->status();
        $l[1]->status();
        $l[2]->status();
        $l[3]->status();
        $l[4]->status();
        $l[5]->status();

    ?>
</body>
</html>