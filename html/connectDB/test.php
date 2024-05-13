<?php

$database = "fordypningsoppgave";
$servername = "localhost";
$username = "bruker23";
$password = "12345";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connected";
} catch (PDOException $e) {
	echo "err" . $e->getMessage();
} finally {
	$conn = null;
}

?>
