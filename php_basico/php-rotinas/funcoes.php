<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Funções PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        /*definição de função*/
        function mensagem(){
            echo "olá mundo<br>";
        }
        mensagem();
        
        /* com parâmetros*/
        function nome($n){
            echo "seu nome é $n<br>";
        }
        nome("ygor");

        /*com retorno */
        function soma($n1, $n2){
            return $n1 + $n2;
        }        
        echo "<p>" . soma(10,10) . "</p><br>";#20

        /*parâmetros com valor padrão */
        function saudacao($nome = "visitante"){
            echo "olá $nome! bem vindo ao php<br>";
        }
        saudacao();
        saudacao("carlos");

        /*função anônima */
        $soma = function($a,$b){
            return $a + $b;
        };

        echo "a soma é: " .$soma(3,4) . "<br>";
        ?>
    </main>
</body>
</html>