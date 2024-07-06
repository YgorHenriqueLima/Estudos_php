<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php 
        require_once 'Mamifero.php';
        $c1 = new Cachorro(70.4,8,4,"Marrom");
        $c1->reagirFrase("Olá");
        $c1->reagirFrase("Vai apanhar");
        $c1->reagirHora(11,45);
        $c1->reagirHora(21,00);
        $c1->reagirDono(true);
        $c1->reagirDono(false);
        $c1->reagirIdadePeso(2,12.5);
        $c1->reagirIdadePeso(17,4.5);
    ?>
    </h1>
</body>
</html>