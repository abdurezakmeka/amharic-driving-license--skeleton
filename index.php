<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" type="text/css" href="CSS/app.css">

</head>

<body style="overflow: auto;">

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

  
 <div class="container">
    <div class="box">
        <div class="heading">
            <h2 class="cardheading">አውቶሞቢል</h2>

            </div>
            <img src="img/auto.jpg">
            <div class="text">
                <p>Automotive quiz bank contains question that are related 
                to automotive driver license</p>
    
  
        <select name="selection" id="cat1">
            <option value="nothing" selected="selected">Select Level</option>
            <option value="PAGE/autovehicle001.php"> Easy</option>
            <option value="PAGE/autovehicle002.php"> Normal</option>
            <option value="PAGE/autovehicle003.php"> Medium</option>
            <option value="PAGE/autovehicle004.php"> Standard</option>
            <option value="PAGE/autovehicle005.php"> Average</option>
            <option value="PAGE/autovehicle006.php"> Intermediate</option>
        </select>

            </div>
    </div> 

        <div class="box">
        <div class="heading">
            <h2 class="cardheading">የህዝብ ማመላለሻ</h2>

            </div>
            <img src="img/public.jpg">
            <div class="text">
                <p>Automotive quiz bank contains question that are related 
                to automotive driver license</p>
     
        <select name="selection" id="cat2">
            <option value="nothing" selected="selected">Select Level</option>
            <option value="PAGE/publicvehicle001.php"> Easy</option>
            <option value="PAGE/publicvehicle002.php"> Normal</option>
            <option value="PAGE/publicvehicle003.php"> Medium</option>
            <option value="PAGE/publicvehicle004.php"> Standard</option>
            <option value="PAGE/publicvehicle005.php"> Average</option>
            <option value="PAGE/publicvehicle006.php"> Intermediate</option>
        </select>
            </div>
    </div> 

            <div class="box">
        <div class="heading">
            <h2 class="cardheading">ደረቅ ጭነት</h2>

            </div>
            <img src="img/dryload.jpg">
            <div class="text">
                <p>Automotive quiz bank contains question that are related 
                to automotive driver license</p>
                        <select name="selection" id="cat3">
            <option value="nothing" selected="selected">Select Level</option>
            <option value="PAGE/dryloadvehicle001.php"> Easy</option>
            <option value="PAGE/dryloadvehicle002.php"> Medium</option>
            <option value="PAGE/dryloadvehicle003.php"> Intermediate</option>
        </select>
            </div>
    </div> 

            <div class="box">
        <div class="heading">
            <h2 class="cardheading">ፈሳሽ ጭነት</h2>

            </div>
            <img src="img/liquidload.jpg">
            <div class="text">
                <p>Automotive quiz bank contains question that are related 
                to automotive driver license</p>
                        <select name="selection" id="cat4">
            <option value="nothing" selected="selected">Select Level</option>
            <option value="PAGE/liquidloadvehicle001.php"> Medium</option>
            <option value="PAGE/liquidloadvehicle002.php"> Intermediate</option>
        </select>
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