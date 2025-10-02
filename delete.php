<?php 

    include 'conexao.php';

    $cpf = $_GET['cpf'];

    $conexao -> query("DELETE FROM cadastro WHERE cpf = $cpf");

?>