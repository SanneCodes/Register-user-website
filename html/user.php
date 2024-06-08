<?php require 'noHeader.php';?>

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
    
    <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?> 

    <form name="frmLogOut" method="post" action="../connectDB/logOut.php">
        <button>Log out</button>
    </form>

</body>
<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/user.css">
</html>