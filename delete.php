<?php 

    include 'conexao.php';

    $cpf = $_GET['cpf'];

    $conexao -> query("DELETE FROM cadastrom WHERE cpf = $cpf");
    $conexao -> query("DELETE FROM cadastro WHERE cpf = $cpf");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="listarM.php">
        <button type="submit" class="btn btn-danger">Lista de Médicos</button>
    </a>

    <a href="listar.php">
        <button type="submit" class="btn btn-danger">Lista de Pacientes</button>
    </a>

</body>
</html>