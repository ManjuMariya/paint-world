<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	header("Location: ./ui.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Registration</title>
    </head>
    <style>
        body {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(34,244,224,1) 0%, rgba(155,187,17,1) 43%, rgba(0,212,255,1) 100%);
            text-align: center;
            color: darkred;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bolder;
            font-size: large;
        }
    </style>
    <body>
        <div>
            <form action="php-scripts/registration.php" method="post">
                <div class="container">
                    <h1>REGISTRATION</h1>
                    <b>NAME</b><br><br><input type="text" required name="name" size="60"><br><br>
			<b>E-MAIL</b><br><br><input type="email" required name="email" size="60"><br><br>
			<b>PASSWORD</b><br><br><input type="password" required name="pass" size="60"><br><br><br><br><br>
			<!--<input type="button" value="REGISTER" onclick="">-->
			<button type="submit" name="submit" style="font-size: 14pt;cursor: pointer;"><b>REGISTER</b></button><br><br><br><br><br>
                </div>
            </form>
        </div>
            

    </body>
</html>