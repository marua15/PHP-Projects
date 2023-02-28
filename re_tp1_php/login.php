<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="login_validation.php" method="post">
        <div class="login">
            <h1>Login</h1>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="login">
                LOGIN
            </button>
            <p>Sign Up using <a href="sign_up.php">SIGN UP</a></p>
        </div>
    </form>
</body>
</html>