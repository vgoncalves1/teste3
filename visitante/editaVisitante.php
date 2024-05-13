<?php
include('../conexao.php');

if (count($_POST) > 0) {

    $nome = $_POST['pesquisar'];

    $sql_clientes = "SELECT * FROM visitantes where nome  LIKE  '%$nome%'";
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
    <link rel="stylesheet" href="../css/style.css" id="bootstrap-css" />
    
</head>

<center>
<body>

<div>

<!--formulario tela inicial ao entrar--> 

    <div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first">
        <img src="../logo2.jpg" id="icon" alt="acoforja" />

        
        <?php 
         echo "";
         ?> 
      
      <br>
        </div>
        
        <!--formulario inserção de data-->
        <form method="post">
          <input type="text" class="fadeIn third" placeholder="Informe o nome" name="pesquisar" style = "color: black; border-radius: 20px; border: solid; width:200px;height:30px; font-size: 15px;text-align: center;">
          <br><br>
          <input type="submit" class="fadeIn fourth" value="CONSULTAR">
          <br>
          <a href="../index.html">
          <p style  = "color: red; font-size: 13px;">VOLTAR</p>  
        </a>
        </form>


    </div>

    <br><br>

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

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
            if (count($_POST) > 0) {

                while ($cliente = $query_clientes->fetch_assoc()) { ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $cliente['nome'] ?>
                            </td>

                            <td>
                                <?php echo $cliente['cpf'] ?>
                            </td>

                            <td style="text-align: center;">
                                <a href="horario/entrada.php?cpf=<?php echo $cliente['cpf']; ?>" style="padding: 0 20px;">Entrada</a>
                                <a href="horario/saida.php?cpf=<?php echo $cliente['cpf']; ?>">Saída</a>
                                <a href="exclusao.php?cpf=<?php echo $cliente['cpf']; ?>" style="padding: 0 20px;" >Excluir</a>
                                
                            </td>
                        </tr>
                    </tbody>

                <?php

                }
            }
            ?>
    </table>
<script src=""></script>
</body>
</html>



</body>

</html>