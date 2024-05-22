<?php


$database = "loginDB";
$servername = "localhost";
$username = "bruker23";
$password = "12345";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error)
{	
	die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$mail = $_POST['mailInput'] ?? null;
$username = $_POST['usernameInput'] ?? null;
$password = $_POST['passwordInput'] ?? null;

if (!$username || !$password) {
    echo "All fields need to be completed";
    exit;
}

$uCheck = "SELECT username FROM user WHERE username = ?";
$uStmt = $conn->prepare($uCheck);
$uStmt->bind_param("s", $username);
$uStmt->execute();
$uResult = $uStmt->get_result();

if ($uResult->num_rows == 0) {
    echo "Username does not exist";
    $uStmt->close();
    $conn->close();
    exit;
}
$uStmt->close();

$sql = "SELECT userId, password, mail FROM user WHERE username = ?";
$query = $conn->prepare($sql);
$query->bind_param("s", $username);
$query->execute();
$result = $query->get_result();

$user = $result->fetch_assoc();
if (!$user || !password_verify($password, $user['password'])) {
    echo "Error: the username or password isn't correct";
    $query->close();
    $conn->close();
    exit;
}

session_start();
$_SESSION['id'] = $user['id'];

$query->close();
$conn->close();

?>

