<?php

include ('../conexao.php');

if (count($_POST) > 0) {

    $op = $_POST['op'];
    $pecas = $_POST['pecas'];
    $volume = $_POST['volume'];
    $notafisc = $_POST['notafisc'];
    $hora = $_POST['hora'];
    $visto = $_POST['visto'];
    $observacao = $_POST['observacao'];
    $data  =  $_POST['data'];

    $sql_expedicao = "INSERT INTO expedicao(op,pecas,volume,notafisc,hora,visto,observacoes,data) VALUES ('$op','$pecas','$volume','$notafisc','$hora','$visto','$observacao','$data') ";
    $query_expedicao = $mysqli->query($sql_expedicao) or die("Não foi possivel cadastrar" . $mysqli->error);

    if ($query_expedicao) {
        echo "<script> alert ('Processado com sucesso') </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Expedição</title>
</head>

<body>

    <center>

        <h1>Cadastro de Expedição</h1>

     <form method="post">   
        <div class="form-group w-25 p-3">
            <label>OP</label>
            <input type="text" class="form-control" name="op">
        </div>
        <div class="form-group w-25 p-3">
            <label>QUANTIDADE/PECAS</label>
            <input type="text" class="form-control" name="pecas">
        </div>
        <div class="form-group w-25 p-3">
            <label>QUANTIDADE/VOLUME</label>
            <input type="text" class="form-control" name="volume">
        </div>
        <div class="form-group w-25 p-3">
            <label>NOTA FISCAL</label>
            <input type="text" class="form-control" name="notafisc">
        </div>
        <div class="form-group w-25 p-3">
            <label>DATA</label>
            <input type="date" class="form-control" name="data">
        </div>
        <div class="form-group w-25 p-3">
            <label>HORA</label>
            <input type="time" class="form-control" name="hora">
        </div>
        <div class="form-group w-25 p-3">
            <label>VISTO PORTARIA</label>
            <input type="text" class="form-control" name="visto">
        </div>
        <div class="form-group w-25 p-3">
            <label>OBSERVACOES</label>
            <input type="text" class="form-control" name="observacao">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <br><br>
        <a href="../index.html">Voltar</a>

    </center>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>