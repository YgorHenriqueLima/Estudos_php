<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <style>
        body {
            background-color: lightblue;
            color: white;
        }
        main {
            background-color: white;
            color: black;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            width: 500px;
            margin: auto;
        }
        div{
            display: flex;
            flex-direction: column;
            line-height: 0.2px;
            background-color: yellowgreen;
            padding: 5px;
            border-radius: 10px;
            margin-top: 10px;

        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Banco PHP</h1>
    <main>
        <?php 
            require_once 'Conta.php';
            
            $conta1 = new Conta("João");
            $conta1->abrirConta("cc");
            $conta1->setNumConta(1111);
            $conta1->depositar(300);
        
            $conta1->pagarMensal();
            $conta1->menu();

            $conta2 = new Conta("Maria");
            $conta2->abrirConta("cp");
            $conta2->setNumConta(2222);
            $conta2->depositar(500);
            $conta2->sacar(100);

            $conta2->pagarMensal();

            $conta2->menu();
        ?>
    </main>
</body>
</html>