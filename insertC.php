<?php 

    include('conexao.php');

    $nome = $_GET['nome'];
    $modalidade = $_GET['modalidade'];
    $consultorio = $_GET['consultorio'];
    $especialidade = $_GET['especialidade'];
    $obj = $_GET['objetivo'];

    echo "<h1>Médicos</h1>";
    echo $nome;
    echo "<br>";
    echo $modalidade;
    echo "<br>";
    echo $consultorio;
    echo "<br>";
    echo $especialidade;
    echo "<br>";
    echo $obj;

    $insert = "INSERT INTO cadastroc VALUES('$nome','$cpf','$consultorio')";

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