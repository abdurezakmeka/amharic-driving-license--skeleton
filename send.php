<?php

session_start();

$_SESSION['user_id'] = 161872368234;
header('Location: public.php');

?>
<?php  

		
if (isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['message'])) {
	
	include 'connection.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$message = validate($_POST['message']);

	if (empty($name) || empty($email) || empty($message)) {
		header("Location: contact.php");
	}else {

		$sql = "INSERT INTO license(name, email, message) VALUES('$name', '$email', '$message')";
		$res = mysqli_query($con, $sql);

		if ($res) {
		header('Refresh:0; url=contact.php');
		header("Location: ./confirmation.php");
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: contact.php");
}