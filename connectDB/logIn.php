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

//henter inputs, hvis ikke input så blir value null
$mail = $_POST['mailInput'] ?? null;
$username = $_POST['usernameInput'] ?? null;
$password = $_POST['passwordInput'] ?? null;

//hvis brukernavn eller passord felt ikke er fullt ut, print error
if(!$username || !$password){
	echo"All fields need to be completed";
	exit;
}


$uCheck = "SELECT username FROM user WHERE username = ?"; //sql statement for å selecte username fra databasen som samsvarer med den brukeren skrev
$uStmt = $conn->prepare($uCheck);
$uStmt->bind_param("s", $username); //binder username input til spørsmålstegnet i uCheck, "s" skrives fordi det er string
$uStmt->execute();
$uResult = $uStmt->get_result(); //lagrer resultat

if($uResult->num_rows == 0){ //hvis resultatet sitt nummer av rader er 0, print error og lukk connections
	echo "Username not exist";
	$uStmt->close();
	$conn->close();
	exit;
}
$uStmt->close();

//Hent userId og passord fra table, der brukernavnet er likt som inputet
$sql = "SELECT userId, password FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username); //binder brukernavn input til ?
$stmt->execute();
$result = $stmt->get_result();//lagrer resultat

$user = $result->fetch_assoc();
if(!$user || !password_verify($password, $user['password'])){ //hvis brukernavnet er feil og/eller passord er feil, print error
	echo "Wrong username or password";
	$stmt->close();
	$conn->close();
	exit;
}

$_SESSION["userId"] = $user["userId"]; //lagre userId i session
$_SESSION['username'] = $username; //lagre username i session

header("Location: ../html/mainpage.php"); //log inn

$stmt->close();
$conn->close();
?>