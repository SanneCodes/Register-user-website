<?php require 'noHeader.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My projects</title>
    
    <link rel="stylesheet" href="../css/gallery.css">
    <link rel="stylesheet" href="../css/nav.css">
</head>
<body>
    <nav>
        <ul>
            <span><li><a href="mainpage.php">&#127800;</a></li></span>

            <li><a href="user.php">My profile</a></li>
            <li><a href="about.php">About me</a></li>
            <li><a href="contact.php">Contact me</a></li>
            <li><a href="projects.php" class="main">Projects</a></li>
            <li><a href="mainpage.php">Home</a></li>
        </ul>
    </nav>

    <h1>&#127800; Test my unity projects &#127800;</h1>
    <div class="container">
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
    </div>
</body>
</html>