<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up!</title>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body>
    <form action="sign_up_validation.php" method="post">
        <div class="singup">
            <h1>Sign Up</h1>
            <label for="first-name">First Name :</label>
            <input type="text" name="first-name" id="first-name" required>
            <label for="last-name">Last Name :</label>
            <input type="text" name="last-name" id="last-name" required>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" required>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" name="signup">
                SIGN UP
            </button>
        </div>
    </form>
</body>
</html>