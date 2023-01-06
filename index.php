<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	header("Location: ./ui.php");
	exit();
}
?>
<!DOCTYPE HTML>
<html lang="en">



<head>
<title>PAINTING WEBSITE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<style>
  h1 {text-align: center;margin: center;margin-left: center;margin-right: center;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;}
	h2 {text-align: center;margin: center;margin-left: center;margin-right: center;}
	p {text-align: center;margin: center;margin-left: center;margin-right: center;}
	a:visited {color: darkred;}
</style>
</head>




<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(211,244,34,1) 0%, rgba(0,212,255,1) 100%);">
<div style="
background: rgba(255, 255, 255, 0.37);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(8.1px);
-webkit-backdrop-filter: blur(8.1px);">
  <br><br>
  <h1 style="font-size: 42pt;"><b>MAKE YOUR OWN PAINTING</b></h1>
  <br>
  <p style="font-size: 18pt; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b>
    Art excludes, like love, any competition and devours the whole persoN</b></p> 
  <br><br><br>
</div>


<br><br><br><br><br><br>



<div class="container">
  <div class="row">
  
  
    <div class="col-sm-4" style="background-color: white;">
      <h2 style="color:darkred ;"><b>ABOUT US</b></h2>
      <p>This program is a software graphics 
      		program that allows the user to draw,or  
      		color, or paint images on computer. .</p>
    </div>
    
    
    
    <div class="col-sm-4" style="background-color: white;">
      <h2 style="color:darkred ;"><b><a href="login.php">login</a></b></h2>
      <p>Boost your self-esteem and inspires yourself</p><br><br>
    </div>
    
    
    
    <div class="col-sm-4" style="background-color: white;">
      <h2 style="color:darkred ;"><b><a href="register.php">REGISTER</a></b></h2>
      <p>Learning makes you better</p><br><br>
    </div>
    
    
    
  </div>
</div>


</body>
</html>
