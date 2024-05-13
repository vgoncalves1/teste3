<?php
include('../conexao.php');



    if(count($_POST)>0){

        $dataI = $_POST['dataI'];
        $dataF = $_POST['dataF'];

    //$sql_clientes = "SELECT vis.nome, vis.tipo, hor.data, hor.cpf, vei.modelo, hor.hora_entrada, hor.hora_saida, hor.notafiscal, hor.observacoes, hor.destino FROM horario_visitante hor 
    //inner join veiculo_visitante vei on hor.placa  =  vei.placa 
    //inner join visitantes vis on vei.cpf = vis.cpf  where hor.data between '$dataI' and '$dataF'";

      $sql_clientes = "SELECT vis.nome, vis.tipo, hor.cpf, hor.placa, hor.data FROM horario_visitante hor 
    inner join visitantes vis on vis.cpf = hor.cpf
    where hor.data between '$dataI' and '$dataF'";
    

    $query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error);
    $num_clientes = $query_clientes->num_rows;

    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" id="bootstrap-css" />
</head>

<center>
<body>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>


<form action="" method="post">

<p>Informe a data inicio</p>
<input type="date" name="dataI">

<p>Informe a data Final</p>
<input type="date" name="dataF">

<br><br>

<input type="submit" value="Enviar">

</form>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Placa</th>
                <th>Data</th>
                <th>Tipo</th>

            </tr>
        </thead>
        <?php
   
   if(count($_POST)>0){
                while ($cliente = $query_clientes->fetch_assoc()) { ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $cliente['nome'] ?>
                            </td>
                            <td>
                                <?php echo $cliente['cpf'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['placa'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['data'] ?>
                            </td>
                            <td>
                                <?php echo $cliente['tipo'] ?>
                            </td>
                        
                        </tr>
                    </tbody>

                <?php

                }}
            
            ?>
    </table>
<a href="../index.html">Voltar</a>
</body>
</html>




</body>

</html>