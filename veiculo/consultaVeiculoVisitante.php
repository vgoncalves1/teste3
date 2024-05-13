<?php 

include '../conexao.php';

$sql_veiculo = "SELECT * FROM visitantes";
$query_veiculo = $mysqli->query($sql_veiculo) or die($mysqli->error);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Nomes</title>
</head>
<body>

<center> 

<h1>Consulta de Usuários</h1>

<table border = '1' cellspadding = '3' >
    <thead >
        <tr>
            <th>Nome</th>
            <th>CPF</th>
        </tr>
    </thead>
    
    <?php while ($visualizar = $query_veiculo->fetch_assoc()) { ?>
    
    <tbody>
        <tr>   
            <td><?php echo $visualizar['nome']; ?></td>
            <td><?php echo $visualizar['cpf']; ?></td>
        </tr>
    </tbody>
    <?php }?>
</table>


<br><br>

<a href="../visitante/cadastroVisitante.php">Voltar</a>

</center>


</body>
</html>