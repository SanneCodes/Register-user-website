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
$mail = $conn->real_escape_string($_POST['mailInput']);
$username = $conn->real_escape_string($_POST['usernameInput']);
$password = $conn->real_escape_string($_POST['passwordInput']);

$uCheck = "SELECT username FROM user WHERE username = '$username'";
$uResult = $conn->query($uCheck);

if($uResult->num_rows != 0){
	echo "username allready exist";
}
else{
	$passwordHashed = password_hash($password, PASSWORD_BCRYPT);

	//insert bruker i db
	$sql = "INSERT INTO user (mail, username, password) VALUES ('$mail', '$username', '$passwordHashed')";
	//SQL-spørring for å sette inn brukerdata i 'User'-tabellen i databasen
	//Utfører spørringen

	if ($conn->query($sql) === TRUE){
		//hvis insetting velykket, så viser suksessmelding
		echo "inserted into database";
	} else {
		//hvis ikke velykket så viser error-melding
		echo "error:" . $sql. "<br>" .$conn->error;
	}
}

//lukker databaseforbindelsen
$conn->close();


?>
