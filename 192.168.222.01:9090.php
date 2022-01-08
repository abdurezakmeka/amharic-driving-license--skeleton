<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM license ORDER BY id DESC LIMIT 100");
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
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body >
 <nav>
         <div class="sitename">
            <a class="logo"  href="index.php"> አ</a>
         </div>

         <input type="checkbox" id="toogle">
         <label for="toogle" class="toogle-btn">

         <i class="fas fa-bars"></i>
         </label>
         <ul>

            <li><a href="logout.php"> Logout</a></li><p style="text-align: center;margin: 0 20px;"><i style="color: white;" id="pop" class="far fa-envelope"></i></i>
         </ul>
      </nav>  
    
 
    
<?php
if (mysqli_num_rows($result) > 0) {
?>
  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<div class="table-box">
        <div class="table-row table-head">
            <div class="table-cell first-cell">
                <p>Name</p>
            </div>
            <div class="table-cell">
                <p>Email</p>
            </div>
            <div class="table-cell last-cell">
                <p>Message</p>
            </div>
            <div class="table-cell last-cell">
                <p>Date</p>
            </div>  
        </div>


        <div class="table-row">
            <div class="table-cell first-cell">
                <p><?php echo $row["name"]; ?></p>
            </div>
            <div class="table-cell">
                <p><?php echo $row["email"]; ?></p>
            </div>
             <div class="table-cell">
                <p><?php echo $row["message"]; ?></p>
            </div>
            <div class="table-cell last-cell">
                <p><?php echo $row["date"]; ?></p>
            </div>

        </div>


    
<?php
$i++;
}
?>

 <?php
}
else{
    echo "No result found";
}
?>

 <div class="app-footer">
    <p style="text-align: center;">2022 © abdraefreq</p>
           
</div>
<script type="text/javascript">
    
    function loadDoc() {
        setInterval(function(){

          const xhttp = new XMLHttpRequest();
          xhttp.onload = function() {
            document.getElementById("pop").innerHTML = this.responseText;
            }
          xhttp.open("GET", "data.php", true);
          xhttp.send();

        },1000);

    }
    loadDoc();

</script>

    <script src="JS/opt.js"></script>

    <script src="JS/script.js"></script>

    <script src="JS/questions.js"></script>
</body>
</html>