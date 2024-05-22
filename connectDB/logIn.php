<?php

//database tilgangsdata
$database = "loginDB";
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

//real_escape_string beskytter mot SQL-injisering ved å behandle brukerinput før det behandles i SQL-spørringen
$mail = $_POST['mailInput'] ?? null;
$username = $_POST['usernameInput'] ?? null;
$password = $_POST['passwordInput'] ?? null;
echo "test1";

if(!$username || !$password){
	echo"All fields need to be completed";
	exit;
}
echo "test2";

$uCheck = "SELECT username FROM user WHERE username = ?";
$uStmt = $conn->prepare($uCheck);
$uStmt->bind_param("s", $username);
$uStmt->execute();
$uResult = $uStmt->get_result();
echo "test3";

if($uResult->num_rows == 0){
	echo "Username not exist";
	$uStmt->close();
	$conn->close();
	exit;
}
$uStmt->close();
echo "test4";

$sql = "SELECT userId, password FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$query->bind_param("s", $username);
$query->execute();
$result = $query->get_result();
echo "test5";

$user = $result->fetch_assoc();
if(!$user || !password_verify($password, $user['password'])){
	echo "Wrong username or password";
	$query->close();
	$conn->close();
	exit;
}
echo "test6";

session_start();
$_SESSION["id"] = $user["id"];
echo "test7";

$query->close();
$conn->close();

?>