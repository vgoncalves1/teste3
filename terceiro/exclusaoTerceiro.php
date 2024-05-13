<?php 

echo "<h1>Tem certeza que deseja excluir?</h1>";



$cpf = $_GET['cpf'];

echo "<a href='deletaTerceiro.php?cpf=$cpf'>Sim</a>";
echo "<a href='../../index.html'>Cancelar</a>";

?>

