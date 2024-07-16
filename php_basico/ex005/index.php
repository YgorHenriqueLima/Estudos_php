<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: lightgray;
        }
        div#caixa {
            color: red;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
    <title>Strings em PHP</title>
</head>
<body>
    <?php 
        // aspas simples = sem interpretação
        // aspas duplas = com interpretação
        $nome = 'Júlio';
        $sobrenome = 'Lima';
        $animal = "cachorro \u{1F415}";
        echo "olá , meu nome é $nome $sobrenome \u{1F596}! ";
        echo "meu Animal é um $animal";
        //echo 'olá $nome';
        echo "<br>";

        // ponto de concatenação (.)
        const ESTADO = "RJ";
        echo "Moro no ".ESTADO;
        echo "<br>";
        const CANAL = "Curso em Vídeo \u{1F499}";
        echo "eu amo o ".CANAL;
        echo "<br>";
        echo "Estamos no ano de " . date('Y');
        echo "<br>";
        $nome = 'Rodrigo';
        $snome = 'Nogueira';
        echo "$nome \"Minotauro\" $snome"; 

        $canal = "curso em video";
        $ano = date('Y');

        echo <<< TESTE
        <div id="caixa">
            olá galera do $canal!<br>
            tudo bem com vocês? <br>
            como está sendo esse ano de $ano<br>
            Abraços! \u{1F596}
        </div>
        TESTE;

        echo <<< 'TESTE'
            olá galera do $canal
        TESTE;

    ?>
</body>
</html>