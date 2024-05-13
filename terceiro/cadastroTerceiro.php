<?php 

require '../conexao.php';


if(count($_POST)>0){

$nome = $_POST['nome'];
$cpf = $_POST ['cpf'];

if($cpf!="" && $nome != ""){
  
  $sql_terceiro = "INSERT INTO terceiro VALUES ('$cpf','$nome')";
  $query_terceiro =  $mysqli->query($sql_terceiro) or die("Não foi possivel cadastrar, usuário já cadastrado<br>"."$mysqli->error");

  if($query_terceiro){
  
    echo "<script> alert('Deu certo')</script>";
  
  }

}

else {
  echo "<script> alert ('Erro ao cadastrar usuario, nome inválido')</script>";
}


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Terceiro</title>
    <link rel="stylesheet" href="../css/style.css" id="bootstrap-css" >
</head>
<body>
    

<div>

<!--formulario tela inicial ao entrar--> 

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
          <input type="text" class="fadeIn third" placeholder="Informe o nome" name="nome" style = "color: black; border-radius: 20px; border: solid; width:200px;height:30px; font-size: 15px;text-align: center;">
          <br><br>
          <input type="text" class="fadeIn third" placeholder="Informe o cpf"  name="cpf" style = "color: black; border-radius: 20px; border: solid; width:200px;height:30px; font-size: 15px;text-align: center;">
          <br><br>
          <input type="submit" class="fadeIn fourth" value="CADASTRAR">
          <br>
          <a href="../index.html">
          <p style  = "color: red; font-size: 13px;">VOLTAR</p>  
        </a>
        </form>


    </div>


</body>
</html>