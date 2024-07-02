<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: lightblue;
        }
        div{
            background-color: white;
            padding: 10px;
            border-radius: 20px;
            gap: 20px;
        }
        div#container{
            display: flex;
            justify-content: center;
            background-color: orange;
        }
    </style>
    <title>Prática 03</title>
</head>
<body>
    <div id="container">
    <?php 
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p = array();
        $p[0] = new Pessoa("Pedro",22,"M");
        $p[1] = new Pessoa("Maria",31,"F");
        $p[2] = new Pessoa("Ygor", 18, "M");
        
        $l = array();
        $l[0] = new Livro("PHP Básico","José da Silva",300,$p[0]);
        $l[1] = new Livro("PHP com POO", "José da Silva",500,$p[0]);
        $l[1] = new Livro("PHP Avançado", "Maria da Souza", 800, $p[1]);
        $l[2] = new Livro("Java Básico", "Paul Jeghter",300, $p[2]);

        $l[0]->abrir();
        $l[0]->folhear(200);
        $l[0]->voltarPag();
        $l[0]->Detalhes();

        $l[1]->abrir();
        $l[1]->folhear(500);
        $l[1]->avancarPag();
        $l[1]->Detalhes();

        $l[2]->abrir();
        $l[2]->folhear(67);
        $l[2]->avancarPag();
        $l[2]->Detalhes();
    ?>
    </div>
</body>
</html>