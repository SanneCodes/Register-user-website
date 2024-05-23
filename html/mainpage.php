<?php

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
    <title>Home</title>
</head>
<body>
    <nav>
        <ul>
            <span><li><a href="mainpage.php">LOGO!</a></li></span>

            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="mainpage.php">Home</a></li>
        </ul>
    </nav>

    <h1>gallery</h1>

    <div class="gallery">
        <a href="http://192.168.1.51" target="_blank">
            <img src="../media/ArtJurney.png" alt="image of ArtJurney game" width="500" height="auto">
        </a>
        <div class="desc">Art Jurney</div>
    </div>

</body>
<link rel="stylesheet" href="../css/home.css">
</html>