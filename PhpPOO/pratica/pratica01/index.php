<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <main>
        <form action="Produto.php" method="POST">
            
            <label for="nome">Nome do Produto: </label>
            <input type="text" name="nome" id="nome">
            <br>
            
            <label for="preco">Preço do Produto: </label>
            <input type="text" name="preco" id="preco">
            <br>
            
            <input type="submit" value="Mostrar">
        </form>
    </main>
</body>
</html>
