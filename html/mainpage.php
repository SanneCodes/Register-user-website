<?php require 'noHeader.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/nav.css">
</head>
<body>
    <nav>
        <ul>
            <span><li><a href="mainpage.php">LOGO!</a></li></span>

            <li><a href="user.php">My profile</a></li>
            <li><a href="about.php" class="main">About me</a></li>
            <li><a href="contact.php">Contact me</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="mainpage.php">Home</a></li>
        </ul>
    </nav>

    <h1>&#127800; GALLERY &#127800;</h1>
    <h3>&#127799; MY PROGRAMS &#127799;</h3>

    <div class="gallery">
        <a href="http://192.168.1.51" target="_blank">
            <img src="../media/ArtJurney.png" alt="image of ArtJurney game">
        </a>
        <div class="desc">Art Jurney &#127804;</div>
    </div>

    <div class="gallery">
        <a href="http://192.168.33.88" target="_blank">
            <img src="../media/FlappyPenguin.png" alt="image of FlappyPenguin game">
        </a>
        <div class="desc">Flappy Penguin &#127804;</div>
    </div>

</body>
</html>