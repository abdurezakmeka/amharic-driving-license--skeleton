<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);



$sql = "SELECT * FROM license";
$result = $con->query($sql);

echo $result->num_rows;
$con->close();

?>