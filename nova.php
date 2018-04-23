<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    </head>
   
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script><script type="text/javascript" src="jquery.onepage-scroll.js"></script>
  
 
<script>
$(document).ready(function(){
$(".main").onepage_scroll();
});
</script></pre>
 <body>
<div class="main">

    <div id="section1">
        
            <section>
            <ul><li><a href="#section1">Home</a></li>
            <li><a href="#sectionm">Serviços</a></li>
           <li><a href="#section2">Cadastro</a></li></ul>
        </section> 
        <h1>Login</h1>
        <form action="">

    <input type="text" id="fname" name="firstname" placeholder="Escreva seu apelido..">


    <input type="text" id="lname" name="lastname" placeholder="Escreva seu nome..">
<input type="submit" value="Submit">
   </form>
            
                        
</div>
        <?php
   

$fname = $_GET['firstname'];
$lname = $_GET['lastname'];

$strcon = mysqli_connect('localhost','root','','line') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO login VALUES ";
$sql .= "('$fname', '$lname')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Contato enviado com sucesso!";

header("Location:nova1.php");

        ?>
    </body>
</html>
