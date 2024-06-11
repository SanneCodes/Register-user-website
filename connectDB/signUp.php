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


//real_escape_string beskytter mot SQL-injisering ved å behandle brukerinput før det behandles i SQL-spørringen
$mail = $conn->real_escape_string($_POST['mailInput']);
$username = $conn->real_escape_string($_POST['usernameInput']);
$password = $conn->real_escape_string($_POST['passwordInput']);

$uCheck = "SELECT username FROM user WHERE username = '$username'";
$uResult = $conn->query($uCheck);

if($uResult->num_rows != 0){
	$_SESSION['errorUsername'] = "Username already exists.";
    header("Location: ../index.php");
    exit;
} else{
	if(strlen($password)<8){
		$_SESSION['errorLength'] = "Your password needs to be more than 8 characters!";
	} else{
		function capital($password){
			return preg_match('/[A-Z]/', $password) === 1;
		}
		function special($password){
			return preg_match('/\W/', $password) === 1;
		}
		function digit($password){
			return preg_match('/\d/', $password) === 1;
		}
		function space($password){
			return preg_match('/\s/', $password) === 0;
		}
		if(capital($password) && special($password) && digit($password) && space($password)){
			$passwordHashed = password_hash($password, PASSWORD_BCRYPT);
	
			//insert bruker i db
			$sql = "INSERT INTO user (mail, username, password) VALUES ('$mail', '$username', '$passwordHashed')";
			//SQL-spørring for å sette inn brukerdata i 'User'-tabellen i databasen
			//Utfører spørringen
			if ($conn->query($sql) === TRUE){
				//hvis insetting velykket, så viser suksessmelding
				echo "inserted into database";
				header("Location: ../html/login.html");
				exit;
			} else {
				//hvis ikke velykket så viser error-melding
				echo "error:" . $sql. "<br>" .$conn->error;
			}
		} else{
			$_SESSION['errorSyntax'] = "Your password must include a minimum of one capital letter, special character, number and cannot contain a space!"
			header("Location: ../index.php")
			exit;
		}
	}
}

//lukker databaseforbindelsen
$conn->close();


?>