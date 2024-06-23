<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 02 - POO</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC CRISTAL"; 
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->carga = 90;
        $c1->destampar();
        $c1->rabiscar();
        print_r($c1);

        $c2 = new Caneta();
        $c2->modelo = "Faber Castell";
        $c2->cor = "Vermelho";
        $c2->ponta = 1.5;
        $c2->carga = 100;
        $c2->tampar();
        print_r($c2); 
    ?>
</body>
</html>