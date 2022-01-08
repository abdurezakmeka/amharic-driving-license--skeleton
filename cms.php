<?php 

session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from licenseadmin where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: 192.168.222.01:9090.php");
                        die;
                    }
                }
            }
            
            $error = "Username of Password is Invalid";
        }else
        {
            $error = "Username of Password is Invalid";
        }
    }

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
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="reachout">
                    <form method="post">
            <div style="font-size: 20px;color: white;">Admin Login</div><br><br>

            <input id="text" type="text" name="user_name" required><br><br>
            <input id="text" type="password" name="password" required><br><br>

            <input style="padding: 2px 30px;" id="button" type="submit" value="Login"><br>
                     

            <span id="error" ><?php echo $error; ?></span><br><br>

            
        </form>

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