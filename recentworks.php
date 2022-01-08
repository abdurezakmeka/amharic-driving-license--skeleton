<?php

session_start();
session_unset(); 
session_destroy();  

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="img/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" type="text/css" href="CSS/app.css">

</head>

<body style="overflow-y: auto;">

     <nav>
         <div class="sitename">
            <a class="logo"  href="index.php"> አ</a>
         </div>
         <input type="checkbox" id="toogle">
         <label for="toogle" class="toogle-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="recentworks.php">Recent works</a></li>
            <li><a href="contact.php">Contact</a></li>
         </ul>
      </nav>
<div class="corre">
        
    <div class="bass">
        <div class="recentworks">
            <div class="resecard">
                <div class="recimg">
                    <i class="fab fa-github"></i>
                </div>
                <div class="reachout">
                    <p>All my recent project can be found on my github repoistory. </p>
                    <a href="https://github.com/abdraefreq" target="_blank">Github</a>
                </div>
            </div>
        </div>
    </div>
    </div>

     <div class="app-footer">
           <p style="text-align: center;">2022 © abdraefreq</p>
        </div>


    <script src="JS/opt.js"></script>

    <script src="JS/script.js"></script>

    <script src="JS/questions.js"></script>
</body>
</html>