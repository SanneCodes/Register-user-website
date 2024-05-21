<?php

$database = "fordypningsoppgave";
$servername = "localhost";
$username = "bruker23";
$password = "12345";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn)
{
	echo "failed connection";
}
echo "connected successfully!";

session_start();
include "fordypningsoppgave";

if(isset($_POST['username']&& isset($_POST['password'])){
	function validate($data){
		$data = trim($data); //fjerner whitespace framme og bak string
		$data = stripslashes($data); //fjerner backslash
		$data = htmlspecialchars($data); //konverterer spesielle karakterer til html
		return $data;
	}
	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($username)){
		header("Location: ../html/login.html?error=User Name is required");
		exit();
	} else if (empty($password)){
		header("Location: ../html/login.html?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password$'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result)===1){
			$row = mysqli_fetch_assoc($result);
			if($row['username']===$username && $row['password']===$pass){
				echo "Logged in!";
				$_SESSION['username'] = $row['username'];
				$_SESSION['mail'] = $row['mail'];
				//header("Location: ../html/home.html");
				exit();
		}
	}
} else {
	header("Location: ../html/login.html");
}

?>
