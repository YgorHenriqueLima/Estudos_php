<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Pessoa.php';
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        //$p1 = new Pessoa("pessoa",10,"M");
       
        $v1 = new Visitante("João", 20, "M");
        $v1->fazerAniver();

        $a1 = new Aluno("Pedro",17,"M");
        $a1->setMatricula(3226698);
        $a1->setCurso("informática");

        $b1 = new Bolsista("Raphaela",24,"F");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->pagarMensalidade();
        $b1->setMatricula(121212);
     
        $p1 = new Professor("Adalberto Ferreira",58,"M");
        $p1->setEspecialidade("Física");
        $p1->setSalario(2000);

        $t1 = new Tecnico("Joana",23,"F");
        $t1->setCurso("TDS");

        
        print_r($v1);
        $a1->pagarMensalidade();
        print_r($a1);
        print_r($b1);
        print_r($p1);
        print_r($t1);

        
    ?>
    </pre>
</body>
</html>