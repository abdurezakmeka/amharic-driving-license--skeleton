<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "id18060865_test";

if(!$con = mysqli_connect($sname,$uname,$password,$db_name))
{

	die("failed to connect!");
}
