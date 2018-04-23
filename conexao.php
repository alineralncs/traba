<?php

$fname = $_GET['firstname'];
$lname = $_GET['lastname'];
$email = $_GET['email'];
$strcon = mysqli_connect('localhost','root','','line') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO contato VALUES ";
$sql .= "('$fname', '$lname', '$email')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Contato enviado com sucesso!";

header("Location:nova.php");
?>