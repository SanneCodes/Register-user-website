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

            <li><a href="user.html">My profile</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="mainpage.php" class="main">Home</a></li>
        </ul>
    </nav>

    <h1>&#127800; GALLERY &#127800;</h1>
    <h3>&#127799; MY PROGRAMS &#127799;</h3>

    <div class="gallery">
        <a href="http://192.168.1.51" target="_blank">
            <img src="../media/ArtJurney.png" alt="image of ArtJurney game">
        </a>
        <div class="desc">Art Jurney</div>
    </div>

    <div class="gallery">
        <a href="http://192.168.33.88" target="_blank">
            <img src="../media/FlappyPenguin.png" alt="image of FlappyPenguin game">
        </a>
        <div class="desc">Flappy Penguin</div>
    </div>

</body>
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/nav.css">
</html>