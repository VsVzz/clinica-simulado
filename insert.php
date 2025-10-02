<?php 

    include('conexao.php');

    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $telefone = $_GET['telefone'];

    echo "<h1>Pacientes</h1>";
    echo $nome;
    echo "<br>";
    echo $cpf;
    echo "<br>";
    echo $telefone;

    $insert = "INSERT INTO cadastro VALUES('$nome','$cpf','$telefone')";

    $conexao->query($insert);

?> 