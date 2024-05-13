<?php 


$cpf =  $_GET['cpf'];

include '../conexao.php';

$hoje = date('Y/m/d');

if(count($_POST)>0) {

$entrada = $_POST['entrada'];
$saida = $_POST['saida'];
$entrada2 = $_POST['entrada2'];
$saida2 = $_POST['saida2'];
$notafisc = $_POST['notafisc'];
$destino  = $_POST['destino'];
$observacao  = $_POST['observacao'];

$sql_inserir = "UPDATE horario_visitante
SET hora_entrada = '$entrada', 
hora_saida = '$saida',
hora_entrada2 = '$entrada2',
hora_saida2 = '$saida2',
notafiscal = '$notafisc',
destino = '$destino',
observacoes  = '$observacao'

where cpf = '$cpf' 
and data  = '$hoje'";

$query_inserir = $mysqli->query($sql_inserir) or die($mysqli->error);

if($query_inserir){
    echo "<script> 
    
    alert('Alterado com sucesso');
    window.location.href = '../index.html';

    </script>";

}
}
?>


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
$sql_visualizar = "SELECT * FROM horario_visitante where cpf = '$cpf' and data  = '$hoje'";
$query_visualizar = $mysqli->query($sql_visualizar) or die($mysqli->error);

$visualizar = $query_visualizar->fetch_assoc()?>


<form action="" method="POST">

<p>Hora Entrada</p>

<input type="time" name = "entrada" value="<?php echo $visualizar['hora_entrada'] ?>">

<p>Hora Saida</p>
<input type="time" name = "saida" value="<?php if(!empty($visualizar['hora_saida'])) echo $visualizar['hora_saida']; ?>">

<p>Hora Entrada2</p>
<input type="time" name="entrada2" value="<?php if(!empty($visualizar['hora_entrada2'])) echo $visualizar['hora_entrada2']; ?>">

<p>Hora Saida2</p>
<input type="time"  name="saida2" value="<?php if(!empty($visualizar['hora_saida2'])) echo $visualizar['hora_saida2']; ?>">

<p>Informe a nota fiscal</p>
<input type="text" name="notafisc" value="<?php  if(!empty($visualizar['notafiscal'])) echo $visualizar['notafiscal'];?>">

<p>Informe o destino</p>    
<input type="text" name="destino"  value="<?php  if(!empty($visualizar['destino'])) echo $visualizar['destino'];?>" >

<p>Observação</p>
<input type="text" name="observacao" value="<?php  if(!empty($visualizar['observacoes'])) echo $visualizar['observacoes'];?>" >

<br><br>

<input type="submit" value = 'Enviar'>

</form>

</body>
</html>