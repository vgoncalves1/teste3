<?php 

include ('../conexao.php');

if(count($_POST)>0){


$data = $_POST['data'];

$sql_visualizar =  "SELECT * FROM expedicao where data  = '$data'";
$query_visualizar = $mysqli->query($sql_visualizar) or die ("Erro ao acessar o banco de dados". $mysqli->error);



}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Visualizar Expedição</title>
</head>
<body>

<center>

<form method="post">
  
  <h3>Informe a data </h3>
  <input type="date" name="data">
  <input type="submit">
  </form>

<br><br>

<table class="table table-hover table-dark w-75 p-3">
  <thead>
    <tr>
      <th scope="col">OP</th>
      <th scope="col">QUANT/PECAS</th>
      <th scope="col">QUANT/VOLUME</th>
      <th scope="col">NOTA FISCAL</th>
      <th scope="col">HORA</th>
      <th scope="col">PLACA/VEICULO</th>
      <th scope="col">VISTO PORTARIA</th>
      <th scope="col">OBSERVAÇÕES</th>
    </tr>
  </thead>
  
  <?php if(count($_POST)>0){ 
          while($visualizar = $query_visualizar->fetch_assoc()){?>
  <tbody>
  <tr>
      <td><?php echo $visualizar['op']?></td>
      <td><?php echo $visualizar['pecas']?></td>
      <td><?php echo $visualizar['volume']?></td>
      <td><?php echo $visualizar['notafisc']?></td>
      <td><?php echo $visualizar['hora']?></td>
      <td><?php echo $visualizar['placa']?></td>
      <td><?php echo $visualizar['visto']?></td>
      <td><?php echo $visualizar['observacoes']?></td>
    </tr>
<?php }}?>
  </tbody>
</table>

<a href="../index.html">Voltar</a>

</center>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>