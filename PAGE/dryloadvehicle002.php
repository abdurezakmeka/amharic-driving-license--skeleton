<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="../CSS/style.css">
<link rel="stylesheet" type="text/css" href="../CSS/app.css">

</head>
<body>

     <nav>
         <div class="sitename">
            <a style="margin-left: 20px; cursor: pointer; text-decoration: none; color: white;" href="../index.php"> አ</a>
         </div>
         <input type="checkbox" id="toogle">
         <label for="toogle" class="toogle-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="recentworks.html">Recent works</a></li>
            <li><a href="contact.html">Contact</a></li>
         </ul>
      </nav>
<section>
     
     <div class="info_box">
   
       
        <div class="buttons">

            <button class="restart">ጀምር</button>
        </div>
    </div>

    <div class="quiz_box">
        <header>
            <div class="title">የመንጃ ፍቃድ የፅሁፍ ፈተና መለማመጃ</div>
            <div class="timer">
                <div class="time_left_txt">ያሎት ሰዓት</div>
                <div class="timer_sec">30</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
            </div>
            <div class="option_list">
            </div>
        </section>

        <footer>
            <div class="total_que">
            </div>
            <button class="next_btn">ቀጣይ ጥያቄ</button>
        </footer>
    </div>


    <div class="result_box">
       
        <div class="complete_text">እንኳን ደስ አሎት የሙከራ ፈተናዎትን በሚገባ ጨረሰዋል!</div>
       
        <div class="buttons">
            <button class="restart">እንደገና ለመጀመር</button>
            <button class="quit">ጨርሶ ለመውጣት</button>
        </div>
    </div>

 </section>

     <div class="app-footer">
           <p style="text-align: center;">2022 © abdraefreq</p>
        </div>


    <script src="../JS/scriptDL2.js"></script>
    <script src="../JS/questions.js"></script>
</body>
</html>