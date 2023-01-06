<?php
session_start();
if(!isset($_SESSION["loggedin"])){
	header("Location: ./login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paint World</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=yes">

        <link rel="stylesheet" href="css/jquery-ui.css">

       
        <link rel="stylesheet" href="css/style.css">
       <style>
        body {
            text-align: center;
            background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(34,244,224,1) 0%, rgba(162,196,131,1) 52%, rgba(0,212,255,1) 100%);
        }
       
        div {
        margin: auto;
       }

       </style>
    </head>


    <body>
     
        <h2>PAINT WORLD!</h2>
        <a style="margin-bottom: 10px;background-color:red;color:#fff;padding:10px;text-decoration:none;" href="logout.php">Logout</a>
       
        <div class="inputContainer" >

           
            <div class="input" id="colorInput">
                <input type="color" list id="paintColor">      
            </div>
            <br /><br />
           
            <!-- <div class="input" id="thickenessInput">
                <div id="circle"></div>
            </div> -->
            
            <br />
            <div class="input">
                <div id="slider"></div>
            </div>         
        </div>        

        <br />
        <div id="canvasContainer" style="margin: auto;">
            <canvas id="paint" width="500px" height="400px"></canvas>
        </div>

       
        <div class="btnContainer">
           
            <div class="btnInput">
                <span id="erase" class="button" style="left: 415px;">Erase</span>
            </div>
            
            <div class="btnInput">
                <span id="save" class="button" style="left: 490px;">Save</span>
            </div>        
           
            <div class="btnInput">
                <span id="reset" class="button" style="left: 600px;">Reset</span>
            </div>       
        </div>
        <img id="canvasimg" src="" />
        
        
        <script src="js/jquery.min.js"></script>

        
        <script src="js/jquery-ui.min.js"></script>

       
        <script src="js/script.js">
        </script>
    </body>
</html>


