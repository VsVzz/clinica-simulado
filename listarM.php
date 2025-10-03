<?php 

    include('conexao.php');
    $select = 'SELECT * FROM cadastrom';
    $resultado = $conexao->query($select);
    
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>
    <h1>Lista de Médicos</h1>
    <table class="table table-striped" border="1">
        <thead>
            <th>nome</th>
            <th>cpf</th>
            <th>consultório</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php 
                if ($resultado->num_rows > 0) {
                     while($medico = $resultado->fetch_object()) {
                        echo "<tr>
                            <td>$medico->nome</td>
                            <td>$medico->cpf</td>
                            <td>$medico->consultorio</td>
                            <td>
                            <a href='delete.php?cpf=$medico->cpf'>Excluir</a>
                            </td>
                        </tr>";
                     }
                } else {
                    echo "<tr>
                    <td>Nenhum Médico cadastrado</td>
                    </tr>";
                }  
            ?>
        </tbody>
    </table>
        <a href="index.html">
            <button type="submit" class="btn btn-danger">Voltar</button>
        </a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>