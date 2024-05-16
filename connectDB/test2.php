<?php
//database tilgangsdata
$database = "fordypningsoppgave";
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

$duplicate_check_sql = "SELECT * FROM User WHERE username='$username'";
$duplicate_check_result = $conn->query($duplicate_check_sql);

if (mysqli_num_rows($duplicate_check_result) > 0){
	//hvis brukernavn duplikat funnet vis error
	echo "ERROR! username allready exists";
} else {
	//insert bruker i db
	$sql = "INSERT INTO User (mail, username, password) VALUES ('$mail', '$username', '$password')";
	//SQL-spørring for å sette inn brukerdata i 'User'-tabellen i databasen
	//Utfører spørringen
	
	if ($conn->query($sql) === TRUE){
		//hvis insetting velykket, så viser suksessmelding
		echo "yay it inserted";
	} else {
		//hvis ikke velykket så viser error-melding
		echo "error:" . $sql. "<br>" .$conn->error;
}

//lukker databaseforbindelsen
$conn->close();


?>
