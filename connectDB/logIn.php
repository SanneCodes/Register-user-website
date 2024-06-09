<?php
session_start();

//database tilgangsdata
$database = "eksamen";
$servername = "localhost";
$username = "bruker23";
$password = "12345";

//koble til databasen
$conn = new mysqli($servername, $username, $password, $database);

//sjekk tilkoblingen
if ($conn->connect_error)
{	//hvis tilkoblingen mislykkes, vis feilmelding og avslutt
	die("Connection failed: " . $conn->connect_error);
}
//hvis tilkobling vellykket, vis suksessmelding
echo "Connected successfully";

$mail = $_POST['mailInput'] ?? null;
$username = $_POST['usernameInput'] ?? null;
$password = $_POST['passwordInput'] ?? null;

if(!$username || !$password){
	echo"All fields need to be completed";
	exit;
}

$uCheck = "SELECT username FROM user WHERE username = ?";
$uStmt = $conn->prepare($uCheck);
$uStmt->bind_param("s", $username);
$uStmt->execute();
$uResult = $uStmt->get_result();

if($uResult->num_rows == 0){
	echo "Username not exist";
	$uStmt->close();
	$conn->close();
	exit;
}
$uStmt->close();

$sql = "SELECT userId, password FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();
if(!$user || !password_verify($password, $user['password'])){
	echo "Wrong username or password";
	$stmt->close();
	$conn->close();
	exit;
}

$_SESSION["userId"] = $user["userId"];
$_SESSION["username"] = $user["username"];

// Debugging statements
echo "Session variables set:";
print_r($_SESSION);

$stmt->close();
$conn->close();



exit();

?>