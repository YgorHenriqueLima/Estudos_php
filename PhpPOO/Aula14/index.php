<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vídeo</title>

</head>
<body>
    <pre>
    <?php 
        require_once 'Gafanhoto.php';
        require_once 'Video.php';
        require_once 'Visualizacao.php';

        $v = array();
        $v[0] = new Video("Aula 1 de POO");
        
        $v[1] = new Video("Aula 12 de PHP");
        $v[1]->play();

        $v[2] = new Video("Aula 15 de HTML5");
        $v[2]->play();
        
        $v[0]->StatusVideo();
        $v[1]->StatusVideo();
        $v[2]->StatusVideo();

        $g = array();
        $g[0] = new Gafanhoto("Jubileu",22,"M","Juba021");
        $g[0]->StatusGafanhotos();
        
        $g[1] = new Gafanhoto("Júlia", 18,"F","July444");
        $g[1]->StatusGafanhotos();



        $vis = array();
        $vis[0] = new Visualizacao($g[0], $v[2]); // Jubileu Assiste HTML5
        $vis[0]->avaliar();

        $vis[1] = new Visualizacao($g[1], $v[1]); // Júlia Assiste PHP
        $vis[1]->avaliarPorcentagem(55);
        print_r($vis[0]);
        print_r($vis[1]);
    ?>
   </pre>
</body>
</html>