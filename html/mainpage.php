<?php require 'noHeader.php';?> <!-- legger til no header script i starten --> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
            <li><a href="projects.php">Projects</a></li>
            <li><a href="mainpage.php" class="main">Home</a></li>
        </ul>
    </nav>

    <h1>&#127800; Welcome to my gallery <?php echo($_SESSION['username']) ?> ! &#127800;</h1>
    <h3>&#127799; MY PROGRAMS &#127799;</h3>

    <div class="container">
        <div class="gallery">
            <a href="#ArtJurney">
                <img src="../media/ArtJurney.png" alt="image of ArtJurney game">
            </a>
            <div class="desc">Art Jurney &#127804;</div>
        </div>
    
        <div class="gallery"->
            <a href="#FlappyPenguin">
                <img src="../media/FlappyPenguin.png" alt="image of FlappyPenguin game">
            </a>
            <div class="desc">Flappy Penguin &#127804;</div>
        </div>

        <div class="gallery">
            <a href="#TicTacToe">
                <img src="../media/TicTacToe.png" alt="image of TicTacToe game">
            </a>
            <div class="desc">Tic Tac Toe &#127804;</div>
        </div>

        <div class="gallery">
            <a href="#Kalkulator">
                <img src="../media/Kalkulator.png" alt="image of FlappyPenguin game">
            </a>
            <div class="desc">Flappy Penguin &#127804;</div>
        </div>
    </div>

    <div class="section" id="ArtJurney">
        <h1> Art Jurney </h1>
    </div>

    <div class="section" id="FlappyPenguin">
        <h1> Flappy Penguin </h1>
    </div>    
    <div class="section" id="TicTacToe">
        <h1> Tic Tac Toe </h1>
    </div>

    <div class="section" id="Kalkulator">
        <h1> Kalkulator </h1>
    </div>

</body>
</html>