<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightblue;
        }
        div {
            background-color: white;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php 
        require_once './classes/Mamifero.php';
        require_once './classes/Reptil.php';
        require_once './classes/Peixe.php';
        require_once './classes/Ave.php';
        //n = new Animal();

        /*
        $m = new Mamifero(86.7, 2,4,"Marrom");
        $m->CaracMamifero();
        $m->locomover();
        $m->alimentar(); 
        $m->emitirSom();


        $r = new Reptil(87.4,10,4,"Verde");
        $r->CaracReptil();
        $r->locomover();
        $r->alimentar(); 
        $r->emitirSom();

        $p = new Peixe(50.5,3,2,"Azul");
        $p->CaracPeixe();
        $p->locomover();
        $p->alimentar(); 
        $p->emitirSom();


        $a = new Ave(70.9,10,4,"Vermelho");
        $a->caracAve();
        $a->locomover();
        $a->alimentar(); 
        $a->emitirSom();      
        */

        $canguro = new Canguru(80.3,8,4,"marrom");
        $canguro->CaracMamifero();
        $canguro->locomover();
        $canguro->alimentar(); 
        $canguro->emitirSom();
        $canguro->usarBolsa();

        $Cachorro = new Cachorro(60.6,6,4,"Branco");
        $Cachorro->CaracMamifero();
        $Cachorro->locomover();
        $Cachorro->alimentar(); 
        $Cachorro->emitirSom();
        $Cachorro->enterrarOsso();


        $cobra = new Cobra(80.6,10,0,"Verde");
        $cobra->CaracReptil();
        $cobra->locomover();
        $cobra->alimentar(); 
        $cobra->emitirSom();
        
        $tartagura = new Tartaruga(90,18,4,"Verde");
        $tartagura->CaracReptil();
        $tartagura->locomover();
        $tartagura->alimentar(); 
        $tartagura->emitirSom();

        
        $goldfish = new Goldfish(90,17,2,"Amarelo");
        $goldfish->CaracPeixe();
        $goldfish->locomover();
        $goldfish->alimentar(); 
        $goldfish->emitirSom();

        $arara = new Arara(70,14,4,"Vermelho");
        $arara->CaracAve();
        $arara->locomover();
        $arara->alimentar(); 
        $arara->emitirSom();

    ?>
</body>
</html>