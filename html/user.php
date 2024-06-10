<?php 

require 'noHeader.php';

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
            <span><li><a href="mainpage.html">LOGO!</a></li></span>

            <li><a href="user.html" class="main">My profile</a></li>
            <li><a href="about.html">About me</a></li>
            <li><a href="contact.html">Contact me</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="mainpage.html">Home</a></li>
        </ul>
    </nav>

    <h1>  </h1>

    <form name="frmLogOut" method="post" action="../connectDB/logOut.php">
        <button>Log out</button>
    </form>

</body>
<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/user.css">
</html>