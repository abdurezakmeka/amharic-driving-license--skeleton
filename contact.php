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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<main class="men">
  <section class="contact">
      <div class="content">
          <h2>Contact Us</h2>
      </div>
      <div class="cntainer">
          <div class="cinfo">             
            <div class="dbox">
                    <div class="icons"><i class="fas fa-map-marked"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Ethiopia<br>Kolfe Keranio<br>A.A</p>
                    </div>
             </div>

              <div class="dbox">
                    <div class="icons"><i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>abdrurezakmeka@yahoo.com</p>
                    </div>
                  
              </div>

              <div class="dbox">
                    <div class="icons"><i class="fas fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+251901112274</p>
                    </div>
                  
              </div>
          </div>
          
          <div class="contform">
              <form method="post" action="send.php">
                  <h2>Send message</h2>
                  <div class="inputbx">
                      <input type="text" name="name" required>
                      <span>Full Name</span>
                  </div>
                  <div class="inputbx">
                    <input type="text" name="email" required>
                    <span>Email</span>
                  </div>
                  <div class="inputbx">
                    <textarea maxlength="255" name="message" required></textarea>
                    <span>Message</span>
                  </div>
                  <div class="inputbx">
                    <input type="submit" value="send" name="btn">
                  </div>
              </form>
          </div>

      </div>
  </section>
</main>

     <div class="app-footer">
           <p style="text-align: center;">2022 © abdraefreq</p>
        </div>


    <script src="JS/opt.js"></script>

    <script src="JS/script.js"></script>

    <script src="JS/questions.js"></script>
</body>
</html>