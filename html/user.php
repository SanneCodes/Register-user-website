<?php 

require 'noHeader.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <nav>
        <ul>
            <span><li><a href="mainpage.php">&#127800;</a></li></span>

            <li><a href="user.php" class="main">My profile</a></li>
            <li><a href="about.php">About me</a></li>
            <li><a href="contact.php">Contact me</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="mainpage.php">Home</a></li>
        </ul>
    </nav>

    <form name="frmLogOut" method="post" action="../connectDB/logOut.php">
        <button>Log out</button>
    </form>

</body>
</html>