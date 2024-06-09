<?php 
session_start();

require 'noHeader.php';

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    // The username is set, so you can use it
    $username = $_SESSION['username'];
    echo "Welcome back, $username!";
} else {
    // The username is not set in the session, handle the case accordingly
    echo "You are not logged in.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
</head>
<body>
    <nav>
        <ul>
            <span><li><a href="mainpage.php">LOGO!</a></li></span>

            <li><a href="user.php" class="main">My profile</a></li>
            <li><a href="about.php">About me</a></li>
            <li><a href="contact.php">Contact me</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="mainpage.php">Home</a></li>
        </ul>
    </nav>

    <h1>Welcome, <?php
    print_r($_SESSION);
    echo htmlspecialchars($username); 
    ?>!</h1>

    <form name="frmLogOut" method="post" action="../connectDB/logOut.php">
        <button>Log out</button>
    </form>

</body>
<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/user.css">
</html>