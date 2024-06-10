<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="css/signupLogin.css">
</head>
<body>
    <div class="container">
        <h1>Sign up</h1>
        <form name="frmSignUp" method="post" action="/connectDB/signUp.php">
            <div class="inputs">
                <label>Mail:</label> <input type="email" name="mailInput"> <br>
                <label>Username:</label> <input type="text" autocomplete="username" name="usernameInput"> <br>
                <label>Password:</label> <input type="password" name="passwordInput" id="passwordInput" autocomplete="current-password">
                <a><?php echo($_SESSION['errorLength']) ?></a>
                <a><?php echo($_SESSION['errorSyntax']) ?></a>
                <div class="showPassCont">
                    <a>Show password:</a>
                    <input type="checkbox" id="showPassword">
                </div>
                <button>Create user</button> 
            </div>     
        </form>
        <div class="link">
            <a href="/html/login.html" >Already have an account? Login here</a>
        </div>
        
    </div>
</body>
<script src="/js/showPass.js"></script>
</html>
