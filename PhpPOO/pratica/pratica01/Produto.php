<?php 
    class Produto{
        var $nome;
        var $preco;
       
        function __construct($nome,$preco) {
            $this->nome = $nome;
            $this->preco = $preco;
        }
       
        function exibirDetalhes(){
            return "Produto: {$this->nome}, Preco: R$ {$this->preco}";
        }
    }

    $nome = $_POST["nome"];
    $preco = floatval($_POST["preco"]);
    $produto = new Produto($nome, $preco);
    
    echo "<h2>Dados do Produto: </h2>";
    echo $produto->exibirDetalhes();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightblue;
            font-size: 20px;
        }
        main {
            background-color: white;
            display: flex;
            flex-direction: column;
            padding: 17px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    
</body>
</html>