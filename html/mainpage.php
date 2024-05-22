<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION["userId"])){
    header("Location: login.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
    YAYYY MAIN PAGE LOGIN!
</body>
</html>