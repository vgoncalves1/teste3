<?php

include ('../conexao.php');

if (count($_POST) > 0) {

    $modelo = $_POST['modelo'];
    $cpf = $_POST['cpf'];
    $placa = $_POST['placa'];



    $sql_cadastro = "INSERT INTO veiculo_terceiro VALUES ('$modelo','$cpf','$placa') ";
    $query_cadastro = $mysqli->query($sql_cadastro) or die("Não foi possivel cadastrar <br>" . $mysqli->error);

    $sql_verifica = "SELECT * FROM terceiro";
    $query_verifica = $mysqli->query($sql_verifica) or die("Não foi possivel cadastrar <br>" . $mysqli->error);

    if ($query_cadastro) {
        echo "<script> 
   
            alert ('Cadastrado com sucesso')
            window.location.href = 'index.php' 
            
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
        <title>Cadastrar Veiculo</title>
        <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <img src="../logo2.jpg" id="icon" alt="acoforja" />

                <!--Informa nome do usuario da determinada chapa-->
                <?php
                echo "";
                ?>

                <br>

            </div>

            <!--formulario inserção de data-->
            <form method="post">
                <input type="text" class="fadeIn third" placeholder="Informe o modelo" name="modelo"
                    style="color: black; border-radius: 20px; border: solid; width:200px;height:30px; font-size: 15px;text-align: center;">
                <br><br>
                <input type="text" class="fadeIn third" placeholder="Informe o cpf" name="cpf"
                    style="color: black; border-radius: 20px; border: solid; width:200px;height:30px; font-size: 15px;text-align: center;">
                <br><br>
                <input type="text" class="fadeIn third" placeholder="Informe o placa" name="placa"
                    style="color: black; border-radius: 20px; border: solid; width:200px;height:30px; font-size: 15px;text-align: center;">
                <br><br>
                <input type="submit" class="fadeIn fourth" value="CADASTRAR">
                <br>
                <a href="../index.html">
                    <p style="color: red; font-size: 13px;">VOLTAR</p>
                </a>

                <a href="consultaVeiculoVisitante.php">Consultar CPF usuários</a>
            </form>


        </div>



</body>

</html>