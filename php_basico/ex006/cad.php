<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <section>
        <?php 
            $nome = $_POST['nome'] ?? "Sem nome";
            $sobrenome = $_POST['sobrenome'] ?? "desconhecido";
            echo "é um prazer conhecer, <strong>$nome $sobrenome</strong>! , este é o meu site";
        ?>
        <p><a href="javascript:history.go(-1)">voltar para a página anterior</a></p>
    </section>
</body>
</html>