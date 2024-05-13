<?php 
$cpf = $_GET['cpf'];

include('../conexao.php');

$sql_delete = "DELETE FROM terceiro WHERE cpf = '$cpf';";
$query_delete = $mysqli->query($sql_delete) or die($mysqli->error);

echo "<script> 
        alert ('Excluido com sucesso') 
        window.location.href = '../index.html'
      </script>"

?>