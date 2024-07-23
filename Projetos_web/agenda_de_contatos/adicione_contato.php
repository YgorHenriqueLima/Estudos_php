<?php
include 'db.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

$query = "INSERT INTO contatos (nome, telefone, email, endereco) VALUES ('$nome', '$telefone', '$email', '$endereco')";

if (mysqli_query($conexao, $query)) {
    echo "Contato adicionado com sucesso!";
} else {
    echo "Erro: " . $query . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);

header("Location: index.php");
exit();
?>
