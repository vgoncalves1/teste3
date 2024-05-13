<?php include('../../conexao.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 


$cpf = $_GET['cpf'];
$agora = date('Y/m/d');

$sql_visualizar = "SELECT * FROM horario_visitante where cpf = '$cpf' and data  = '$agora' ";
$query_visualizar = $mysqli->query($sql_visualizar) or die($mysqli->error);
$num_clientes = $query_visualizar->num_rows;

if ($num_clientes==0){ 

    echo " 
    <script>
    
        alert('Nenhuma faixa de horario cadastrada no dia $agora. Favor cadastrar');
        window.location.href = '../../index.html';

     </script>";
}
?>

<center>
<table border="1" cellpadding = "10"> 

  <thead>
        <tr>
        <th>CPF</th>
        <th>Placa</th>
        <th>Hora Entrada</th>
        <th>Hora Saida</th>
        <th>Hora Entrada2</th>
        <th>Hora Saida2</th>
        <th>Ações</th>

    </tr>
    </thead>
    
    <br>
    
    <?php while ($visualizar = $query_visualizar -> fetch_assoc() ){ ?>
    
        <tbody>

    <tr>
        <td><?php echo $visualizar['cpf']; ?></td>
        <td><?php echo $visualizar['placa'];?></td>
        <td><?php echo $visualizar['hora_entrada'];?></td>
        <td><?php echo $visualizar['hora_saida'];?></td>
        <td><?php echo $visualizar['hora_entrada2'];?></td>
        <td><?php echo $visualizar['hora_saida2'];?></td>
        <td><a href="../horaVisitante.php?cpf=<?php echo $visualizar['cpf'];?>">Editar</a></td>
        
    </tr>

</tbody>

    <?php  }  ?>

</table>

</body>
</html>