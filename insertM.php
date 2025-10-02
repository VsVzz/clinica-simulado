<?php 

    include('conexao.php');

    $cpf = $_GET['cpf'];
    $nome = $_GET['nome'];
    $consultorio = $_GET['consultório'];

    echo "<h1>Pacientes</h1>";
    echo $nome;
    echo "<br>";
    echo $cpf;
    echo "<br>";
    echo $consultorio;

    $insert = "INSERT INTO cadastro VALUES('$cpf','$nome','$telefone')";

    $conexao->query($insert);

?> 