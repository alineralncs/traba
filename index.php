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
        
    <h2>Web Design</h2>	 
			<p>O web design é uma extensão da prática do design gráfico, <br>
                            onde o foco do projeto é a criação de web sites e documentos <br>disponíveis no ambiente da World Wide Web.
			</p>
                       
                       <nav><ul><li><a href="#section2">Cadastre-se</a></li>
                            </ul></nav>
  </div> <!--  &nbsp;-->
<div id="sectionm">
   <br><br><br><br><br><br> <p>Linguagens de programação</p><br><br><br>
    <img src="aa.png" alt=""/>
    <img src="b.png" alt=""/>
    <img src="js3.png" alt=""/>
    
	</div>  <br><br><br><br><br><br>
    <div id="section2">
    <h2>Cadastro</h2>	 
			<div class="container">
                            <form action="conexao.php">

    <input type="text" id="fname" name="firstname" placeholder="Escreva seu apelido..">


    <input type="text" id="lname" name="lastname" placeholder="Escreva seu nome..">



    <input type="text" id="email" name="email" placeholder="Escreva seu email..">

    <input type="submit" value="Submit">
  </form>
   </div></div> 
        <?php
        // put your code here
        ?>
    </body>
</html>
