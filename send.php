<?php  

		
if (isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['message'])) {
	
	include 'db_conn.php';

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
		$res = mysqli_query($conn, $sql);

		if ($res) {
		header('Refresh:0; url=contact.php');
			echo '<script>alert("Message Sucessfully sent")</script>';
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: contact.php");
}