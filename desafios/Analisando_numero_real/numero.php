<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        ul {
            list-style-type: none; /* Remove os marcadores padrão */
            margin: 20px;
            padding: 0;
        }

        ul li {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
            display: flex;
            align-items: center; /* Alinhar verticalmente */
        }

        ul li::before {
            content: '\2022'; /* Símbolo de ponto */
            font-size: 24px; /* Tamanho do marcador */
            color: #007BFF; /* Cor do marcador */
            margin-right: 10px; /* Espaço entre o marcador e o texto */
        }
    </style>
</head>
<body>
    <main>
        <h1>Analisador de números reais</h1>
        <?php 
            $num = $_POST['numero'] ?? 0;
            echo "<p>Analisando o número <strong>".number_format($num, 3, "," , ".")."</strong> informado pelo usuário</p>";

            $int = (int) $num;
            $fra = $num - $int;
            echo "
            <ul>
                 <li>
                     A parte inteira do número é <strong> ".number_format($int,0,",",".")."</strong>
                 </li><br>
                 <li>
                     A parte fracionária do número é <strong> ".number_format($fra,3,",",".")."</strong>
                 </li>
            </ul>
            "
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>