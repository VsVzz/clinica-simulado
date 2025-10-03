<?php 

    include('conexao.php');

    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $telefone = $_GET['telefone'];
    $consultorio = $_GET['consultorio'];

    echo "<h1>Pacientes</h1>";
    echo $nome;
    echo "<br>";
    echo $cpf;
    echo "<br>";
    echo $telefone;
    echo "<br>";
    echo $consultorio;

    $insert = "INSERT INTO cadastro VALUES('$nome','$cpf','$telefone', '$consultorio')";

    $conexao->query($insert);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html">
        <button type="submit" class="btn btn-danger">Voltar</button>
    </a>
</body>
</html>