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

//sql stmt that finds username in DB that is same as username input
$uCheck = "SELECT username FROM user WHERE username = '$username'";
$uResult = $conn->query($uCheck);

//hvis mer enn 0 rader funnet, er det allerede en bruker med samme navn
if($uResult->num_rows != 0){
	$_SESSION['errorUsername'] = "Username already exists."; //lagrer error i session
    header("Location: ../index.php");//endrer header lokasjon til index.php
    exit;
} else{
	if(strlen($password)<8){
		$_SESSION['errorLength'] = "Password length must be over 8 characters";
		header("Location: ../index.php");
		exit;
	} else{
		function capital($password){
			return preg_match('/[A-Z]/', $password) === 1;
		}
		function number($password){
			return preg_match('/\d/', $password) === 1;
		}
		function special($password){
			return preg_match('/\W/', $password) === 1;
		}
		function space($password){
			return preg_match('/\s/', $password) === 0;
		}
		if(capital($password) && number($password) && special($password) && space($password)){
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
			$_SESSION['errorSyntax'] = "Password must have capital letter, number, special character and not contain space";
			header("Location: ../index.php")
			exit;
		}
	}
}
	
//lukker databaseforbindelsen
$conn->close();

?>