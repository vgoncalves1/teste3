<?php 

$cpf=  $_GET['cpf'];

include('../../conexao.php');


if(count($_POST)>0){


$placa =  $_POST['placa'];
$hora =  $_POST['hora'];
$data  =  $_POST['data'];


$cont  =  0;

$sql_verifica = "SELECT * FROM horario_visitante";
$query_verifica = $mysqli->query($sql_verifica) or die($mysqli->error);

while ($verifica = $query_verifica -> fetch_assoc()){

if( $verifica['data']== $data && $verifica['cpf']==$cpf){
    $cont++;
}
}

if($cont == 0){
    $sql_clientes = "INSERT INTO horario_visitante (cpf,placa,data,hora_entrada) values ('$cpf','$placa','$data','$hora')";
    $query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error); 

    echo "<script> alert('Arquivo inserido com sucesso');  
                    window.location.href = '../../index.html';
    </script>";
}

else {

    echo "<script> alert('Arquivo ja cadastrado');  
    window.location.href = '../../index.html';
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
    <title>Cadastrar Horario</title>
</head>
<body>
 
<form action="" method="POST">

<?php

echo "<p> CPF </p> <input type = 'text' value = '" .$cpf."' disabled > ";

$sql_placa = "SELECT * FROM veiculo_visitante where cpf = '$cpf' ";
$query_placa = $mysqli->query($sql_placa) or die($mysqli->error); 


echo " <p>Selecione a placa do veiculo</p> <select name = 'placa'>
       <option value = 'Não Possui'> "."Não possui"."</option>
        ";


while($placaf = $query_placa ->fetch_assoc()){


echo "<option value = '".$placaf['placa']."'> ".$placaf['placa']."</option>
            
        ";    


}

echo "</select>";

?>

<a href="../../veiculo/veiculoVisitante.php">Cadastrar Veiculo?</a>

<p>Informe a data</p>
<input type="date" name="data" required>

<p>Informe a hora de entrada</p>
<input type="time" name="hora">

<br><br>
<input type="submit" value="Enviar">
</form>


</body>

<a href="../../index.html">Tela Inicio</a>

</html>