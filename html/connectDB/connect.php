<?php
$database = "fordypningsoppgave";
$servername = "localhost";
$username = "bruker23";
$password = "12345";

$conn = new mysqli($servername, $username, $password, $database);



if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$mail = $conn->real_escape_string($_POST['mailInput']);
$username = $conn->real_escape_string($_POST['usernameInput']);
$password = $conn->real_escape_string($_POST['passwordInput']);

$sql = "INSERT INTO User (mail, username, password) VALUES ('$mail', '$username', '$password');";

if ($conn->query($sql) === TRUE){
	echo "yay it inserted";
} else {
	echo "error:" . $sql. "<br>" .$conn->error;
}

echo "test";
$conn->close();


?>
