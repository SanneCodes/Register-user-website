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
    <title>Create account</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container">
        <h1>Sign up</h1>
        <form name="frmSignUp" method="post" action="/connectDB/signUp.php">
            <div class="inputs">
                <label>Mail:</label> <input type="mail" name="mailInput"> <br>
                <label>Username:</label> <input type="text" autocomplete="username" name="usernameInput"> <br>
                <label>Password:</label> <input type="password" name="passwordInput" id="passwordInput" autocomplete="current-password" >
                <div class="showPassCont">
                    <a>Show password:</a>
                    <input type="checkbox" id="showPassword">
                </div>
            </div>
            <button>Create user</button>
        </form>
        <a href="/html/login.html">Already have an account? Login here</a>
    </div>
</body>
<script src="/js/showPass.js"></script>
</html>