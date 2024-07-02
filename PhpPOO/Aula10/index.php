<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';

        $p1 = new Aluno("Ygor", 18, "M");
        $p1->setMatr(33225562);
        $p1->setCurso("Técnico em Desenvolvimento de Sistemas");
        print_r($p1);

        $p2 = new Professor("Claudio", 40, "M");
        $p2->setEspecialidade("Matemática");
        $p2->setSalario(800);
        $p2->receberAum();
        print_r($p2);

        $p3 = new Funcionario("Fabiana",37,"F");
        $p3->setSetor("Estoque");
        $p3->setSalario(4300);
        $p3->setTrabalhando(true);
        print_r($p3);
    ?>
    </pre>
</body>
</html>