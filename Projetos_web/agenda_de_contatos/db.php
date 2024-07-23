<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenda";

    //criar conexão
    $conexao = mysqli_connect($servername, $username, $password, $dbname);

    //verificar conexao
    if(!$conexao){
        die("Falha na conexão".mysqli_connect_error());
    }
?>